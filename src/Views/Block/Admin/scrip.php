<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<!-- <script src="../../../../public/assets/admin/vendor/libs/jquery/jquery.js"></script>
<script src="../../../../public/assets/admin/vendor/libs/popper/popper.js"></script> -->
<script src="../../../../public/assets/admin/vendor/js/bootstrap.js"></script>
<script src="../../../../public/assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>


<script src="../../../../public/assets/admin/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../../../../public/assets/admin/js/main.js"></script>
<!-- Validate -->
<script src="../../../../public/assets/admin/js/Validation.js"></script>
<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Hàm tạo CKEditor cho một trường cụ thể
    function createCKEditor(elementId) {
      ClassicEditor
        .create(document.querySelector(`#${elementId}`))
        .catch(error => {
          console.error(`Error creating CKEditor for ${elementId}:`, error);
        });
    }

    // Gọi hàm tạo CKEditor cho phần tử có id là 'editor'
    if (document.getElementById('editor')) {
      createCKEditor('editor');
    }

    // Gọi hàm tạo CKEditor cho phần tử có id là 'editor2'
    if (document.getElementById('editor2')) {
      createCKEditor('editor2');
    }
  });
</script>

</body>

</html>