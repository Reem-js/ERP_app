@extends('layouts.app', ['activePage' => 'allBrands', 'titlePage' => __('translation.website.sidebar.All Brands')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{__('translation.website.sidebar.Brands')}}</h4>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="{{ route('brands.create') }}" class="btn btn-round btn-primary mb-3" style="color:white;"><i class="fa fa-plus-circle" aria-hidden="true"></i> {{__('translation.website.sidebar.Create Brand')}}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('translation.website.crud.Number') }}</th>
                                            <th>{{__('translation.brands.Brand Name')}}</th>
                                            <th>{{__('translation.brands.Brand Image')}}</th>
                                            <th>{{__('translation.website.crud.Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>فيرنا</td>
                                            <td>صورةُُ ما</td>
                                            <td class="td-actions">
                                                <div class="d-flex justify-content-space-between">
                                                    <a class="btn btn-info" title="{{__('translation.website.crud.Update')}}" rel="tooltip" href="{{ route('brands.edit',2) }}" style="color:white; margin: 0 2px 0 0;"><i class="material-icons">edit</i></a>
                                                    <form style="margin: 0 0 0 2px;" action="{{ route('brands.destroy',2) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id" value="2">
                                                        <a class="btn btn-danger" rel="tooltip" title="{{__('translation.website.crud.Delete')}}" href="{{ route('brands.edit',2) }}" style="margin: 0 2px 0 0; color:white;">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
