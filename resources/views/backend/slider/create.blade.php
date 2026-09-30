@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-images"></i>
                </span>
                <div>
                    <h1 class="h3 mb-1">Slide Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.slider.index') }}">Slide List </a></li>/
                    <li>
                        Add Slide
                    </li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-images"></i>
                                <span>Add Slide</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">

                        <div class="col-12">
                            <label class="form-label" for="slideImg">Slide Image (max : 1.5 mb)</label>
                            <input class="form-control" id="slideImg" name="slider_image" type="file">
                            @error('slider_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="invalid-feedback">Slide Image is required.</div>
                            <div class="mt-2">
                                <img id="slideImagePreview" src="" alt="" style="height:200px; display:none;">
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-start mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>

<!-- image maximum size check  -->
<script>
    document.getElementById('slideImg').addEventListener('change', function() {
        const maxSize = 1.5 * 1024 * 1024; // 4 MB
        const error = this.parentElement.querySelector('.text-danger');

        if (this.files[0] && this.files[0].size > maxSize) {
            this.value = '';

            if (error) {
                error.textContent = 'Image size must not be larger than 1.5 MB.';
            } else {
                this.insertAdjacentHTML(
                    'afterend',
                    '<span class="text-danger">Image size must not be larger than 1.5 MB.</span>'
                );
            }
        }
    });
</script>

@endsection