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
            $.ajax({
                type: 'POST',
                url: '/phan-cong/xoa',
                data: {
                    participation_id: id,
                },
                success: function (response) {
                    console.log('Xóa thành công.');
                    Swal.fire({
                        title: 'Xóa thành công',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000 // 2 giây
                    });
                    location.reload();
                },
                error: function (error) {
                    console.error('Lỗi khi Xóa: ' + error);
                    Swal.fire({
                        title: 'Xóa thất bại',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 3000 // 2 giây
                    });
                }
            });
        } else {
            console.log('Người dùng đã chọn hủy bỏ hoặc không chắc chắn.');
        }
    });
}
$(document).ready(function () {
    $("#form-add-Projectparticipations").validate({
        rules: {
            project_id: {
                required: true
            },
            account_id: {
                required: true
            },
            position: {
                required: true
            }
        },
        messages: {
            project_id: {
                required: "Vui lòng chọn tên dự án."
            },
            account_id: {
                required: "Vui lòng chọn tên thành viên."
            },
            position: {
                required: "Vui lòng nhập vai trò trong dự án."
            }
        }
    });
});
