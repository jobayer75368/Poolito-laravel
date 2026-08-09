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
                    <h1 class="h3 mb-1">Team Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.team_members') }}">Members List</a>
                    </li>/
                    <li>Add Member</li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form class="panel needs-validation" novalidate>
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Add New Member</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="formName">Name</label>
                            <input class="form-control" id="formName" required>
                            <div class="invalid-feedback">Full name is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formName">Slug</label>
                            <input class="form-control" id="formName" required>
                            <div class="invalid-feedback">Full name is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formService">Designation</label>
                            <input class="form-control" id="formService" type="text">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="memberAge">Age</label>
                            <input class="form-control" id="memberAge" type="number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="memberPhone">Phone Number</label>
                            <input class="form-control" id="memberPhone" type="phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="memberEmail">Email</label>
                            <input class="form-control" id="memberEmail" type="email">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="memberAddress">Address</label>
                            <input class="form-control" id="memberAddress" type="text">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberExperience">Experience</label>
                            <input class="form-control" id="memberExperience" type="number">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="longDescription">Description</label>
                            <textarea class="form-control summernote" id="longDescription" rows="5"></textarea>
                        </div>

                        <div class="my-5">
                            <h6>Social Links</h6>
                            <div class="col-md-12 px-4 pt-3">
                                <div>
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" type="url">
                                </div>

                                <div>
                                    <label class="form-label" for="linkedin">Linkedin</label>
                                    <input class="form-control" id="linkedin" type="url">
                                </div>

                                <div>
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" type="url">
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="memberImage">Status</label>
                            <select class="form-control" name="status" id="memberImage">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>

                        </div>

                        <div class="col-12">
                            <label class="form-label" for="serviceImg">Image</label>
                            <input class="form-control" id="serviceImg" type="file">
                            <div class="invalid-feedback">Service Image is required.</div>
                        </div>

                    </div>
                    <div class="d-flex justify-start mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <!-- <div class="col-12 col-xl-5">
        <div class="panel h-100">
          <h2 class="h5 mb-3 section-title"><i class="bi bi-input-cursor-text" aria-hidden="true"></i><span>Input States</span></h2><input class="form-control mb-3" value="Default input"><input class="form-control is-valid mb-3" value="Valid input"><input class="form-control is-invalid mb-3" value="Invalid input">
          <div class="form-check"><input class="form-check-input" type="checkbox" id="sampleCheck" checked><label class="form-check-label" for="sampleCheck">Sample checkbox</label></div>
        </div>
      </div> -->

        </section>
    </div>
</main>
@endsection