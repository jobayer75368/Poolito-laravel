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
                    <h1 class="h3 mb-1">User Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.user.index') }}">User List </a></li>/
                    <li>
                        Edit User Status & Role
                    </li>
                </ul>
            </div>

        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Edit User</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">

                        <div class="col-12">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="active" @selected($user->status=='active')>Active</option>

                                <option value="inactive" @selected($user->status=='inactive')>Inactive</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-control" name="role" id="role">
                                <option value="editor" @selected($user->status=='editor')>Editor</option>

                                <option value="Admin" @selected($user->status=='admin')>Admin</option>
                            </select>
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

</script>
@endsection