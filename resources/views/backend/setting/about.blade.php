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
                        <a class="py-2 px-4 rounded {{ request()->routeIs('admin.setting.about') ? 'active_setting' :''}}" href="{{ route('admin.setting.about') }}">About Settings</a>
                        <a class="py-2 px-4 rounded" href="">About Settings</a>
                        <a class="py-2 px-4 rounded" href="">Contact Settings</a>
                    </div>
                    <hr class="mb-4 mt-0">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-sliders" aria-hidden="true"></i><span>About Settings</span></h2>
                        </div>
                    </div>
                    <div class="row g-3">

                        <div class=" col-md-6">
                            <label class="form-label" for="workspaceName">Website Name</label>
                            <input class="form-control" id="workspaceName" type="text" value="{{ $settings->site_name }}" name="site_name" required>
                            <div class="invalid-feedback">Website name is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="workspaceName">Hero Title</label>
                            <input class="form-control" id="workspaceName" type="text" value="{{ $settings->hero_title }}" name="hero_title" required>
                            <div class="invalid-feedback">Hero Title is required.</div>
                        </div>

                        <div class="mb-4 col-12">
                            <label class="form-label" for="workspaceName">Footer Details</label>
                            <textarea class="form-control" name="footer_details" id="workspaceName">
                            {{ $settings->footer_details }}
                            </textarea>
                        </div>

                        <div class="mb-4 col-md-6">
                            <label class="form-label" for="workspaceName">Opening Day</label>

                            <div class="d-flex gap-2">
                                <select class="form-control" name="opening_day_from" id="">
                                    <option value="sunday" @selected($settings->opening_day_from=='sunday')>Sunday</option>
                                    <option value="monday" @selected($settings->opening_day_from=='monday')>Monday</option>
                                    <option value="tuesday" @selected($settings->opening_day_from=='tuesday')>Tuesday</option>
                                    <option value="tuesday" @selected($settings->opening_day_from=='wednesday')>Wednesday</option>
                                    <option value="thursday" @selected($settings->opening_day_from=='thursday')>Thursday</option>
                                    <option value="friday" @selected($settings->opening_day_from=='friday')>Friday</option>
                                    <option value="saturday" @selected($settings->opening_day_from=='saturday')>Saturday</option>
                                </select>
                                <p class="mb-0 d-flex align-items-center">To</p>
                                <select class="form-control" name="opening_day_to" id="">
                                    <option value="sunday" @selected($settings->opening_day_to=='sunday')>Sunday</option>
                                    <option value="monday" @selected($settings->opening_day_to=='mondau')>Monday</option>
                                    <option value="tuesday" @selected($settings->opening_day_to=='tuesday')>Tuesday</option>
                                    <option value="tuesday" @selected($settings->opening_day_to=='wednesday')>Wednesday</option>
                                    <option value="thursday" @selected($settings->opening_day_to=='thursday')>Thursday</option>
                                    <option value="friday" @selected($settings->opening_day_to=='friday')>Friday</option>
                                    <option value="saturday" @selected($settings->opening_day_to=='saturday')>Saturday</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">Opening Day is required.</div>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="workspaceName">Opening Time</label>

                            <div class="d-flex gap-2">
                                <input type="time" class="form-control" name="opening_time_from" id="opening_time_from" value="{{ $settings->opening_time_from->format('H:i')}}" required>
                                <p class="mb-0 d-flex align-items-center">To</p>
                                <input type="time" class="form-control" name="opening_time_to" id="opening_time_to" value="{{ $settings->opening_time_to->format('H:i') }}" required>
                            </div>
                            <div class="invalid-feedback">Opening Hours is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="headerLogo">Header Logo</label>
                            <input class="form-control" name="header_logo" id="headerLogo" type="file">
                            <div class="invalid-feedback">Header Logo is required.</div>
                            <div class="mt-2">
                                <img id="headerLogoPreview" src="{{ $settings->header_logo && Storage::disk('public')->exists($settings->header_logo) ? asset('storage/'.$settings->header_logo) : '' }}" alt="" style="height:200px;width:300px;">
                            </div>
                        </div>

                        <div class=" col-md-6">
                            <label class="form-label" for="footerLogo">Footer Logo</label>
                            <input class="form-control" name="footer_logo" id="footerLogo" type="file">
                            <div class="invalid-feedback">Footer Logo is required.</div>
                            <div class="mt-2">
                                <img id="footerLogoPreview" src="{{ $settings->footer_logo &&Storage::disk('public')->exists($settings->footer_logo) ? asset('storage/'.$settings->footer_logo) : '' }}" alt="" style="height:200px;width:300px;">
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <label class="form-label" for="pageBanner">Page Banner</label>
                            <input class="form-control" name="page_banner" id="pageBanner" type="file">
                            <div class="invalid-feedback">Page Banner is required.</div>
                            <div class="mt-2">
                                <img id="pageBannerPreview" src="{{ $settings->page_banner && Storage::disk('public')->exists($settings->page_banner) ? asset('storage/'.$settings->page_banner) : '' }}" alt="" style="height:200px;">
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit"><i class="bi bi-check2-circle" aria-hidden="true"></i> Save Settings</button>
                </form>
            </div>
        </section>
    </div>
</main>

@endsection