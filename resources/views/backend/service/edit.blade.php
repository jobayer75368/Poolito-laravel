@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-tools"></i>
                </span>
                <div>
                    <h1 class="h3 mb-1">Service Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.service.index') }}">Service List </a></li>/
                    <li>
                        Edit Service
                    </li>
                </ul>
            </div>

        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Edit Service</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="serviceTitle">Service Title</label>
                            <input class="form-control" id="serviceTitle" name="service_title" value="{{ $service->service_title }}" required>
                            <div class="invalid-feedback">Full name is required.</div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="serviceSlug">Service Slug</label>
                            <input class="form-control" id="serviceSlug" name="service_slug" value="{{ $service->service_slug }}" required>
                            <div class="invalid-feedback">Slug is required.</div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="serviceIcon">Service Icon</label>
                            <input class="form-control" id="formService" name="service_icon" type="file">
                            <div class="mt-2">
                                <img id="serviceIconPreview"
                                    src="{{ $service->service_icon ? asset('storage/'.$service->service_icon) : '' }}"
                                    alt=""
                                    style="height:50px; {{ $service->service_icon ? '' : 'display:none;' }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="shortDescription">Short Description</label>
                            <textarea class="form-control summernote" id="shortDescription" rows="5" name="short_description">{{ $service->short_description }}</textarea>
                            <!-- <div class="invalid-feedback">Message is required.</div> -->
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="longDescription">Long Description</label>
                            <textarea class="form-control summernote" id="longDescription" name="long_description" rows="5">{{ $service->long_description }}</textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="active" @selected($service->status=='active')>Active</option>

                                <option value="inactive" @selected($service->status=='inactive')>Inactive</option>
                            </select>

                        </div>

                        <div class="col-12">
                            <label class="form-label" for="serviceImg">Service Image</label>
                            <input class="form-control" id="serviceImg" name="service_image" type="file">
                            <div class="invalid-feedback">Service Image is required.</div>
                            <div class="mt-2">
                                <img id="serviceImagePreview"
                                    src="{{ $service->service_image ? asset('storage/'.$service->service_image) : '' }}"
                                    alt=""
                                    style="height:200px; {{ $service->service_image ? '' : 'display:none;' }}">
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-start mt-4">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>

<!-- Image preview  -->

<script>
    function previewImage(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

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

    previewImage('formService', 'serviceIconPreview');
    previewImage('serviceImg', 'serviceImagePreview');
</script>
@endsection