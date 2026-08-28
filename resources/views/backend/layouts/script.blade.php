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



<script>
    // Image preview 

    function previewImage(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        // Stop if these elements don't exist on the current page
        if (!input || !preview) {
            return;
        }

        input.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        });
    }

    previewImage('serviceIcon', 'serviceIconPreview');
    previewImage('serviceImg', 'serviceImagePreview');
    previewImage('blogImg', 'blogImagePreview');
    previewImage('memberImg', 'memberImagePreview');
    previewImage('portfolioImg', 'portfolioImagePreview');
    previewImage('profileImg', 'prfoileImagePreview');
</script>