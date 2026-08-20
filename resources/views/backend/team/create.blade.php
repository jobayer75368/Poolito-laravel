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
                        <a class="link-opacity-25-hover" href="{{ route('admin.team.index') }}">Members List</a>
                    </li>/
                    <li>Add Member</li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">

                <form action="{{ route('admin.team.store') }}" method="POST" class="panel needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-people"></i>
                                <span>Add New Member</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="formName">Name</label>
                            <input class="form-control" id="formName" name="name" required>
                            <div class="invalid-feedback">Full name is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formName">Slug</label>
                            <input class="form-control" id="formName" name="slug" required>
                            <div class="invalid-feedback">Slug is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formService">Designation</label>
                            <input class="form-control" id="formService" type="text" name="designation" required>
                            <div class="invalid-feedback">Designation is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberEmail">Email</label>
                            <input class="form-control" id="memberEmail" type="email" name="email" required>
                            <div class="invalid-feedback">Email is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberPhone">Phone Number</label>
                            <input class="form-control" id="memberPhone" type="tel" name="phone">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberAddress">Address</label>
                            <input class="form-control" id="memberAddress" type="text" name="address">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberAge">Age</label>
                            <input class="form-control" id="memberAge" type="number" name="age">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="memberExperience">Experience</label>
                            <input class="form-control" id="memberExperience" type="number" name="experience">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="longDescription">Description</label>
                            <textarea class="form-control summernote" id="longDescription" rows="5" name="description"></textarea>
                        </div>

                        <div class="my-5">
                            <h6>Social Links</h6>
                            <div class="col-md-12 px-4 pt-3">
                                <div>
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" type="url" name="facebook">
                                </div>

                                <div>
                                    <label class="form-label" for="linkedin">Linkedin</label>
                                    <input class="form-control" id="linkedin" type="url" name="linkedin">
                                </div>

                                <div>
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" type="url" name="instagram">
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
                            <input class="form-control" id="serviceImg" type="file" name="member_image">
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
@endsection