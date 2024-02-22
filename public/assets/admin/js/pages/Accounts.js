
$(document).ready(function () {
  $.validator.addMethod("phoneVietnam", function (value, element) {
    return this.optional(element) || /^0\d{9}$/.test(value);
  }, "Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại bắt đầu bằng số 0 và có đúng 10 số.");

  $("#form-account").validate({
    rules: {
      full_name: {
        required: true,
      },
      email: {
        required: true,
        email: true
      },
      phone_number: {
        required: true,
        phoneVietnam: true
      },
      password: {
        required: true,
        minlength: 8,
        firstUppercase: true
      }
    },
    messages: {
      full_name: {
        required: "Vui lòng nhập họ và tên của bạn."
      },
      email: {
        required: "Vui lòng nhập địa chỉ email của bạn.",
        email: "Địa chỉ email không hợp lệ."
      },
      phone_number: {
        required: "Vui lòng nhập số điện thoại của bạn."
      },
      password: {
        required: "Vui lòng nhập mật khẩu.",
        minlength: "Mật khẩu phải có ít nhất 8 ký tự.",
        firstUppercase: "Chữ cái đầu phải viết hoa"
      }
    },
    errorPlacement: function (error, element) {
      error.appendTo(element.closest(".form-group").find('.form-message'));
    },
    highlight: function (element, errorClass) {
      $(element).closest(".form-group").addClass("has-error");
    },
    unhighlight: function (element, errorClass) {
      $(element).closest(".form-group").removeClass("has-error");
    }
  });
});

function destroy(id) {
  Swal.fire({
    title: 'Bạn có chắc chắn muốn xóa?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Xóa',
    cancelButtonText: 'Hủy',
    customClass: {
      popup: 'small-dialog',
    },
  }).then((result) => {
    if (result.isConfirmed) {
      // Thực hiện các thao tác cần thiết khi người dùng chấp nhận
      console.log('Đã xóa thành công');
      $.ajax({
        type: 'POST',
        url: '/tai-khoan/xoa',
        data: {
          account_id: id,
        },
        success: function (response) {
          console.log('Trạng thái đã được cập nhật thành công.');
        },
        error: function (error) {
          console.error('Lỗi khi cập nhật trạng thái: ' + error);
        }
      });
      location.reload();
    } else {
      // Người dùng đã chọn "Hủy bỏ" hoặc "Không", không thực hiện hành động nào
      console.log('Người dùng đã chọn hủy bỏ hoặc không chắc chắn.');
    }
  });
}
