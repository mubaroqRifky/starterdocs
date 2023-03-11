@extends('layouts.main') 

@section('breadcumbs')
    @php
        $breadcumbs = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'Users',
                'route' => ''
            ],
        ];
    @endphp
    @include('layouts.breadcumbs', compact('breadcumbs'))
@endsection

@section('content')
<div class="d-grid gap-3 p-4 card">
    <div class="d-flex justify-content-end border-bottom pb-4">
        <button type="button" class="btn btn-primary">Create User</button>
    </div>

    <div class="table-responsive py-1">
        <table id="table_user" class="table table-striped table-hover w-100">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
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
</div>
@endsection

@push('scripts_body')
<script> 
    let table = new DataTable('#table_user', {
        responsive: true
    });
</script>
@endpush