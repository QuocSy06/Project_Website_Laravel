<!-- Vendor js -->
<script src="/template/admin/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="/template/admin/assets/js/app.min.js"></script>

<script src="/template/admin/assets/libs/selectize/js/standalone/selectize.min.js"></script>
<script src="/template/admin/assets/libs/mohithg-switchery/switchery.min.js"></script>
<script src="/template/admin/assets/libs/select2/js/select2.min.js"></script>
<script src="/template/admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<!-- Init js-->
<script src="/template/admin/assets/js/pages/form-advanced.init.js"></script>

<!-- Mô tả chi tiết -->
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/5nk94xe9fcwk22fkp6gou9ymszwidnujnr2mu3n3xe2biap3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
      selector: '#content',
      plugins: 'advlist autolink lists link image charmap preview anchor textcolor',
      toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      menubar: false,
      height:600, // Chiều cao cố định
      content_style: "body {overflow-y: auto;}" // Cho phép thanh cuộn bên trong trình soạn thảo
  });
</script>

  
  

<script src="/template/admin/assets/js/main.js"></script>

@yield('footer')