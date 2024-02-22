
function destroy(idTasks) {
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
                url: '/nhiem-vu/xoa',
                data: {
                    task_id: idTasks,
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
    $(document).ready(function () {
        $("#form-add-tasks").validate({
            rules: {
                task_name: {
                    required: true
                },
                task_content: {
                    required: true
                },
                project_id: {
                    required: true
                },
                account_id: {
                    required: true
                },
                start_date: {
                    required: true,
                    date: true,
                    minDateToday: true
                },
                end_date: {
                    required: true,
                    date: true,
                    greaterThanStart: "#start_date"
                },
                description: {
                    required: true
                }
            },
            messages: {
                task_name: {
                    required: "Vui lòng nhập tên nhiệm vụ."
                },
                task_content: {
                    required: "Vui lòng nhập nội dung nhiệm vụ."
                },
                project_id: {
                    required: "Vui lòng chọn dự án."
                },
                account_id: {
                    required: "Vui lòng chọn người thực hiện."
                },
                start_date: {
                    required: "Vui lòng chọn ngày bắt đầu.",
                    date: "Vui lòng nhập ngày bắt đầu hợp lệ.",
                    minDateToday: "Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại."
                },
                end_date: {
                    required: "Vui lòng chọn ngày kết thúc.",
                    date: "Vui lòng nhập ngày kết thúc hợp lệ.",
                    greaterThanStart: "Ngày kết thúc phải lớn hơn ngày bắt đầu ít nhất 1 ngày."
                },
                description: {
                    required: "Vui lòng nhập mô tả nhiệm vụ."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        // Custom validation methods
        $.validator.addMethod("minDateToday", function (value, element) {
            var currentDate = new Date();
            var selectedDate = new Date(value);
            return selectedDate >= currentDate;
        }, "Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại.");

        $.validator.addMethod("greaterThanStart", function (value, element, param) {
            var startDate = $(param).val();
            var endDate = value;
            return new Date(endDate) > new Date(startDate);
        }, "Ngày kết thúc phải lớn hơn ngày bắt đầu ít nhất 1 ngày.");
    });


