
function updateStatus(newStatus, idProject) {
    Swal.fire({
        title: 'Bạn có chắc chắn muốn thực hiện hành động này?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Chấp nhận',
        cancelButtonText: 'Hủy bỏ',
        customClass: {
            popup: 'small-dialog',
        },
    }).then((result) => {
        if (result.isConfirmed) {
            // Thực hiện các thao tác cần thiết khi người dùng chấp nhận
            console.log('Đã chấp nhận. Thực hiện cập nhật trạng thái: ' + newStatus);
            $.ajax({
                type: 'POST',
                url: '/du-an/duyet-xu-ly',
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
