<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<!-- Quill library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script> -->

<!-- Initialize Quill editor -->
<!-- <script>
    const quill = new Quill('.editor', {
        theme: 'snow'
    });
</script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll('.editor').forEach(editor => {
        ClassicEditor.create(editor)
            .catch(error => console.error(error));
    });
</script>