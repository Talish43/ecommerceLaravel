@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/plugin/parsleyjs/css/parsley.css') }}">
@endsection


@extends('backend.layouts.master')
@section('content')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">{{ $data['title'] }}</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->

            <div class="row align-item-center ">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">{{ $data['createTitle'] }}</h6>
                        </div>
                        <div class="card-body mx-auto col-10 col-md-8 col-lg-6">
                            <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label for="sub" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label  class="form-label">Status</label>
                                        <select class="form-select" required id="status" name="status">
                                            <option value="inactive" selected>In Active</option>
                                            <option value="active">Active</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="photo" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" required/>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 w-50" style="width: 100px; margin: 0 auto;  display: block;">{{ $data['saveTitle'] }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->

        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('backend/assets/plugin/parsleyjs/js/parsley.js') }}"></script>
@endsection




