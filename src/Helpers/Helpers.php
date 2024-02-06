<?php

namespace App\Helpers;

class Helpers
{
    static function generateOTP(): String
    {
        $characters = '0123456789';

        // Tạo otp
        $otp = '';
        for ($i = 0; $i < 6; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $otp;
    }
};
