<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Controllers\BaseController;
use App\Models\AccountsModel;
use App\Helpers\Helpers;

class SendEmailController extends BaseController
{
    public $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        
    }

    public function send_mail()
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $accountsModel = new AccountsModel();
            $email = $_POST['email'];
            $account = $accountsModel->checkAccounts($email);
            if ($account) {
                $current_time = time();
                $expire_time = $current_time + 180;

                $otp = Helpers::generateOTP();
                $otp_md5 = md5($otp);
                setcookie("otp", "$otp_md5", $expire_time, "/");
                $receiver = $email;
                setcookie("email", "$receiver", $expire_time, "/");
                try {
                    //Server settings
                    $this->mail->isSMTP();
                    $this->mail->Host       = 'smtp.gmail.com';
                    $this->mail->SMTPAuth   = true;
                    $this->mail->Username   = 'khanhnqpc06731@fpt.edu.vn';
                    $this->mail->Password   = 'ohmy eexw gxan xozw';
                    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $this->mail->Port       = 587;

                    //Recipients
                    $this->mail->setFrom('khanhnqpc06731@fpt.edu.vn', 'Easy Project');
                    $this->mail->addAddress($receiver, 'Recipient Name');

                    // Content
                    $this->mail->isHTML(true);
                    $this->mail->Subject = 'Easy Project gửi mã xác thực OTP';
                    $this->mail->Body    =
                        '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                                            <div style="margin:50px auto;width:70%;padding:20px 0">
                                            <div style="border-bottom:1px solid #eee">
                                                <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Ninh Kiều Restaurant xin chào quý khách</a>
                                            </div>
                                            
                                            <p>Sử dụng OTP dưới đây để hoàn tất thủ tục đổi mật khẩu. Mã OTP có hiệu lực trong 1 phút.</p>
                                            <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">' . "$otp" . '</h2>
                                            <p style="font-size:0.9em;">Thân chào,<br />Easy Project</p>
                                            <hr style="border:none;border-top:1px solid #eee" />
                                            <div style="float:left;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                                                <p>Easy Project</p>
                                                </p>
                                            </div>
                                            </div>
                                        </div>';

                    $this->mail->send();
                    if ($this->mail->send()) {
                        $this->redirect('/quen-mat-khau/xac-thuc');
                    }
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
                }
            } else {
                
            }
        }
    }
  
}
