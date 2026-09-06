@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
                <div>
                    <p class="eyebrow mb-1">Workspace</p>
                    <h1 class="h3 mb-1">Settings</h1>
                    <p class="text-muted mb-0">Customize Website & Contact details</p>
                </div>
            </div>

        </div>

        <section class="row g-3">
            <div class="col-12">
                <form class="panel needs-validation" method="POST" action="{{ route('admin.setting.about.update') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="pb-0 fw-bold d-flex">

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.general') ? 'active_setting' :''}}" href="{{ route('admin.setting.general') }}">General Settings</a>

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.about') ? 'active_setting' :''}}" href="{{ route('admin.setting.about') }}">About Settings</a>

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.contact') ? 'active_setting' :''}}" href="{{ route('admin.setting.contact') }}">Contact Settings</a>

                    </div>
                    <hr class="mb-4 mt-0">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-sliders" aria-hidden="true"></i><span>About Settings</span></h2>
                        </div>
                    </div>
                    <div class="row g-3">

                        <div class="mb-4 col-12">
                            <label class="form-label " for="aboutDescription">About Description</label>
                            <textarea class="form-control summernote" name="about_description" id="aboutDescription">
                            {!! $settings->about_description !!}
                            </textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="aboutImage1">About Image 1</label>

                            <input class="form-control" name="about_image1" id="aboutImage1" type="file">
                            <div class="invalid-feedback">About Image is required.</div>

                            <div class="mt-2">
                                <img id="aboutImage1Preview" src="{{ $settings->about_image1 && Storage::disk('public')->exists($settings->about_image1) ? asset('storage/'.$settings->about_image1) : '' }}" alt="" style="{{ $settings->about_image1 ?'height:200px;width:300px':'';}}">
                            </div>
                        </div>

                        <div class=" col-md-6">
                            <label class="form-label" for="aboutImage2">About Image 2</label>

                            <input class="form-control" name="about_image2" id="aboutImage2" type="file">

                            <div class="invalid-feedback">About Image is required.</div>

                            <div class="mt-2">
                                <img id="aboutImage2Preview" src="{{ $settings->about_image2 && Storage::disk('public')->exists($settings->about_image2) ? asset('storage/'.$settings->about_image2) : '' }}" alt="" style="{{ $settings->about_image2 ?'height:200px;width:300px':'';}}">
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary mt-2" type="submit"><i class="bi bi-check2-circle" aria-hidden="true"></i> Save Settings</button>
                </form>
            </div>
        </section>
    </div>
</main>

@endsection