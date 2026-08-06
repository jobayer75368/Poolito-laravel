<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs5.min.js"></script>

<script>
    $(function() {
        $('.summernote').summernote({
            tabsize: 2,
            height: 250
        });
    });
</script>

<!-- Quill library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script> -->

<!-- Initialize Quill editor -->
<!-- <script>
    const quill = new Quill('.editor', {
        theme: 'snow'
    });
</script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll('.editor').forEach(editor => {
        ClassicEditor.create(editor)
            .catch(error => console.error(error));
    });
</script> -->
<!-- <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '.editor',
        license_key: 'gpl',
        menubar: 'file edit view insert format tools table help',

        plugins: [
            'advlist',
            'anchor',
            'autolink',
            'autosave',
            'charmap',
            'code',
            'codesample',
            'directionality',
            'emoticons',
            'fullscreen',
            'help',
            'image',
            'insertdatetime',
            'link',
            'lists',
            'media',
            'preview',
            'searchreplace',
            'table',
            'visualblocks',
            'visualchars',
            'wordcount'
        ],

        toolbar: 'undo redo | ' +
            'blocks fontfamily fontsize | ' +
            'bold italic underline strikethrough | ' +
            'forecolor backcolor removeformat | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | ' +
            'link image media table | ' +
            'emoticons charmap codesample | ' +
            'searchreplace visualblocks visualchars | ' +
            'ltr rtl | ' +
            'code preview fullscreen help',

        toolbar_mode: 'sliding',

        branding: false,

        promotion: false,

        statusbar: true,

        resize: true
    });
</script> -->