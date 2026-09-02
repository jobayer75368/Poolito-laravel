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
        <form class="panel needs-validation" method="POST" action="{{ route('admin.setting.general.store') }}" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="panel-header">
            <div>
              <h2 class="h5 mb-1 section-title"><i class="bi bi-sliders" aria-hidden="true"></i><span>General Settings</span></h2>
            </div>
          </div>
          <div class="row g-3">

            <div class=" col-md-6">
              <label class="form-label" for="workspaceName">Website Name</label>
              <input class="form-control" id="workspaceName" type="text" value="adminHMD Workspace" required>
              <div class="invalid-feedback">Website name is required.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="workspaceName">Hero Title</label>
              <input class="form-control" id="workspaceName" type="text" value="adminHMD Workspace" required>
              <div class="invalid-feedback">Website name is required.</div>
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="workspaceName">Footer Details</label>
              <textarea class="form-control" id="workspaceName" required>

            </textarea>
              <div class="invalid-feedback">Website name is required.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="headerLogo">Header Logo</label>
              <input class="form-control" id="headerLogo" type="file">
              <div class="invalid-feedback">Header Logo is required.</div>
              <div class="mt-2">
                <img id="headerLogoPreview" src="" alt="" style="height:200px; display:none;">
              </div>
            </div>

            <div class=" col-md-6">
              <label class="form-label" for="footerLogo">Footer Logo</label>
              <input class="form-control" id="footerLogo" type="file">
              <div class="invalid-feedback">Footer Logo is required.</div>
              <div class="mt-2">
                <img id="footerLogoPreview" src="" alt="" style="height:200px; display:none;">
              </div>
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="pageBanner">Page Banner</label>
              <input class="form-control" id="pageBanner" type="file">
              <div class="invalid-feedback">Page Banner is required.</div>
              <div class="mt-2">
                <img id="pageBannerPreview" src="" alt="" style="height:200px; display:none;">
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