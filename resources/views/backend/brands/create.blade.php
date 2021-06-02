@extends('layouts.app', ['activePage' => 'createBrand', 'titlePage' => __('translation.website.sidebar.Create Brand')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{__('translation.website.sidebar.Create Brand')}}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="m-5">
                                <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <p for="name">{{__('translation.brands.Brand Name')}}</p>
                                      <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="row form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-raised">
                                                <img class="w-100" src="{{ asset('images/defaults/default_image.png') }}" rel="nofollow" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                            <div class="col-lg-4 align-self-center p-5">
                                                <span class="btn btn-raised btn-round btn-default btn-file">
                                                    <span class="fileinput-new">{{__('translation.brands.Select Image')}}</span>
                                                    <span class="fileinput-exists">&nbsp/{{__('translation.brands.Change')}}</span>
                                                    <input type="file" name="photo"/>
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{__('translation.brands.Remove')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-primary">{{__('translation.website.crud.create')}}</button>
                                            <button type="submit" class="btn btn-primary">{{__('translation.website.crud.Create & New')}}</button>
                                        </div>
                                        <div class="col-lg-2 offset-6">
                                            <button type="submit" class="btn btn-danger">{{__('translation.website.crud.Cancel')}}</button>
                                        </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
            /* font-size: 15px; */
    </style>
@endpush
