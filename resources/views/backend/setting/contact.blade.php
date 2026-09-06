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
                <form class="panel needs-validation" method="POST" action="{{ route('admin.setting.contact.update') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="pb-0 fw-bold d-flex">

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.general') ? 'active_setting' :''}}" href="{{ route('admin.setting.general') }}">General Settings</a>

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.about') ? 'active_setting' :''}}" href="{{ route('admin.setting.about') }}">About Settings</a>

                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.contact') ? 'active_setting' :''}}" href="{{ route('admin.setting.contact') }}">Contact Settings</a>

                    </div>
                    <hr class="mb-4 mt-0">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-sliders" aria-hidden="true"></i><span>Contact Settings</span></h2>
                        </div>
                    </div>
                    <div>
                        @if (session('success'))
                        <div class="alert alert-success" role="alert"><strong>Success:</strong>
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label" for="Phone">Phone Number</label>
                            <input class="form-control" id="Phone" type="tel" name="phone" value="{{ $settings->phone }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" id="Email" type="email" name="email" value="{{ $settings->email }}" required>
                            <div class="invalid-feedback">Email is required.</div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="Address">Address</label>
                            <input class="form-control" id="Address" type="text" name="address" value="{{ $settings->address }}">
                        </div>

                        <div class="my-5">
                            <h6>Social Links</h6>
                            <div class="col-md-12 px-4 pt-3">
                                <div>
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" type="url" name="facebook" value="{{ $settings->facebook }}">
                                </div>

                                <div>
                                    <label class="form-label" for="linkedin">Linkedin</label>
                                    <input class="form-control" id="linkedin" type="url" name="linkedin" value="{{ $settings->linkedin }}">
                                </div>

                                <div>
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" type="url" name="instagram" value="{{ $settings->instagram }}">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="location">Location Map <i class="bi bi-geo-alt-fill"></i></label>
                            <input class="form-control" id="location" type="text" name="location" placeholder="Paste Iframe from Google Map..." value="{{ $settings->location }}">
                        </div>

                    </div>
                    <button class="btn btn-primary mt-4" type="submit"><i class="bi bi-check2-circle" aria-hidden="true"></i> Save Settings</button>
                </form>
            </div>
        </section>
    </div>
</main>

@endsection