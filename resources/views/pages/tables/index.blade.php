@extends('layouts.main')

@section('breadcumbs')
    @php
        $breadcumbs = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'Tables',
                'route' => ''
            ],
        ];
    @endphp
    @include('layouts.breadcumbs', compact('breadcumbs'))
@endsection


@section('content')
<div class="d-grid gap-3 p-4 card align-content-start">
    <section class="row">
        <div class="col-md-7">
            <h4 class="mb-3">Default Table</h4>
            <table id="example" class="table table-striped w-100">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th> 
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td> 
                        </tr>
                    @endfor
                </tbody> 
            </table>
        </div>

        <div class="col-md-5 d-grid gap-2 align-content-start">
            <h5 class="fw-bold">Default Table</h5>
            <p>Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.</p>
            <p>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p>
            <p>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p>
        </div>
    </section>
    
    <section class="row">
        <div class="col-md-7">
            <h4 class="mb-3">Default Table with Action</h4>
            <table id="example" class="table table-striped w-100">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td class="d-flex align-items-center gap-2">
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endfor
                </tbody> 
            </table>
        </div>

        <div class="col-md-5 d-grid gap-2 align-content-start">
            <h5 class="fw-bold">Actions</h5>
            <p>Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.</p>
            <p>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p> 
        </div>
    </section>

    <section class="row">
        <div class="col-md-7">
            <h4 class="mb-3">Default DataTable</h4>
            <table id="paginate" class="table table-striped w-100">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td class="d-flex align-items-center gap-2">
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endfor
                </tbody> 
            </table>
        </div>

        <div class="col-md-5 d-grid gap-2 align-content-start">
            <h5 class="fw-bold">DataTable</h5>
            <p>Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.</p>
            <p>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p> 
        </div>
    </section>
</div>
@endsection 

@push('scripts_body')
<script> 
    let table = new DataTable('#paginate', {
        responsive: true
    });
</script>
@endpush