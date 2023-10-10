@section('styles')
<link rel="stylesheet" href="{{ asset('backend/assets/plugin/datatables/responsive.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/plugin/datatables/dataTables.bootstrap5.min.css') }}">
@endsection


@extends('backend.layouts.master')



@section('content')

        <!-- Body: Body -->       
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">{{ $data['title'] }}</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <a href="{{ route('banners.create') }}" class="btn btn-dark btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>{{ $data['createTitle'] }}</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row clearfix g-3">
                    <div class="col-sm-12">
                    @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Photo</th> 
                                            <th>Created Date</th> 
                                            <th>Status</th>   
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $index => $banner)
                                            <tr>
                                                <td>
                                                    <div class="fw-bold text-secondary">{{ $index + 1 }}</div>
                                                </td>
                                                <td>
                                                    {{ $banner->title }} 
                                                </td>
                                                <td>
                                                    <img class="avatar rounded-circle" src="{{ asset('storage/uploads/') }}/{{$banner->photo}}" alt="">
                                                </td>
                                                <td>
                                                {{ $banner->created_at }} 
                                                </td>
                                                <td><span class="badge {{ $banner->status === 'active' ? 'bg-success' : ' bg-warning' }}">{{ ucfirst($banner->status) }} </span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>
        </div>

@endsection


@section('scripts')
<script src="{{ asset('backend/assets/bundles/dataTables.bundle.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>
@endsection




