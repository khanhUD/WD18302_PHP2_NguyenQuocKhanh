

function destroy(newStatus, idProject) {
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
            console.log('Đã chấp nhận. Thực hiện cập nhật trạng thái: ' + newStatus);
            $.ajax({
                type: 'POST',
                url: '/du-an/xoa',
                data: {
                    project_id: idProject,
                    status: newStatus
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
    $("#form-add-products").validate({
        rules: {
            project_name: {
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
            project_cost: {
                required: true,
                number: true,
                min: 0
            }
        },
        messages: {
            project_name: {
                required: "Vui lòng nhập tên dự án."
            },
            start_date: {
                required: "Vui lòng chọn ngày bắt đầu.",
                date: "Vui lòng nhập ngày bắt đầu hợp lệ.",
                minDateToday: "Ngày bắt đầu phải lớn hơn ngày hiện tại."
            },
            end_date: {
                required: "Vui lòng chọn ngày kết thúc.",
                date: "Vui lòng nhập ngày kết thúc hợp lệ.",
                greaterThanStart: "Ngày kết thúc phải lớn hơn ngày bắt đầu ít nhất 1 ngày."
            },
            project_cost: {
                required: "Vui lòng nhập chi phí dự án.",
                number: "Vui lòng nhập số.",
                min: "Chi phí không thể là số âm."
            }
        }
    });

    // Custom validation methods
    $.validator.addMethod("minDateToday", function (value, element) {
        var currentDate = new Date();
        var selectedDate = new Date(value);
        return selectedDate >= currentDate;
    }, "Ngày bắt đầu phải bằng hoặc lớn hơn ngày hiện tại.");

    $.validator.addMethod("greaterThanStart", function (value, element, param) {
        var startDate = $(param).val();
        var endDate = value;
        return new Date(endDate) > new Date(startDate);
    }, "Ngày kết thúc phải lớn hơn ngày bắt đầu ít nhất 1 ngày.");
});