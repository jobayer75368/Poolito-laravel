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
                        <a class="link-opacity-25-hover" href=" route('admin.dashboard') ">Dashboard </a>
                    </li>/
                    <li>
                        Slide List
                    </li>/
                    <li><a class="link-opacity-25-hover" href="{{  route('admin.slider.create') }} "> Add Slide</a></li>
                </ul>
            </div>

        </div>

        <section class="panel mt-3">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Slide List</span></h2>
                </div>
                <div class="d-flex gap-2 justify-content-right">
                    <a class="d-flex justify-content-center align-items-center btn btn-sm btn-info" href=" {{ route('admin.slider.create') }} ">
                        <i class="bi bi-plus-square-fill fs-4"></i>Add Slide
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <div>
                    @if (session('success'))
                    <div class="alert alert-success" role="alert"><strong>Success:</strong>
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                    <tbody class="row">

                        @foreach ($sliders as $slider)
                        <tr class="fw-semibold col-md-4">
                            <td class="" style="height:300px;width:500px">
                                <img style="width:100%;height:100%" src="{{ $slider->slider_image ? (filter_var($slider->slider_image, FILTER_VALIDATE_URL)? $slider->slider_image : asset('storage/'.$slider->slider_image)):asset('no-image.png') }}" alt="SLider Image">
                                <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                                    <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#sliderDeleteModal{{$slider->id }}">
                                        <i class="bi bi-trash me-1"></i>Delete
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
        </section>

    </div>
</main>

<!-- Delete modal  -->

@foreach ($sliders as $slider )
<div class="modal fade" id="sliderDeleteModal{{$slider->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this slider?</div>

            <form method="POST" action=" {{ route('admin.slider.destroy',$slider->id) }}" class="modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection