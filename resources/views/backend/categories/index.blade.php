@extends('layouts.app', ['activePage' => 'allCategories', 'titlePage' => __('translation.website.sidebar.All Categories')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{__('translation.website.sidebar.Categories')}}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="{{ route('categories.create') }}" class="btn btn-round btn-primary mb-3" style="color:white;">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                         {{__('translation.website.crud.create')}}
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('translation.website.crud.Number') }}</th>
                                            <th>{{__('translation.categories.Category Name')}}</th>
                                            <th>{{__('translation.categories.Category Image')}}</th>
                                            <th>{{__('translation.website.crud.Product Count')}}</th>
                                            <th>{{__('translation.website.crud.Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>فيرنا</td>
                                            <td>صورةُُ ما</td>
                                            <td>5</td>
                                            <td class="td-actions">
                                                <div class="d-flex justify-content-space-between">
                                                    <a class="btn btn-info" title="{{__('translation.website.crud.update')}}" rel="tooltip" href="{{ route('categories.edit',2) }}" style="margin: 0 2px 0 0; color:white;">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form style="margin: 0 0 0 2px;" action="{{ route('categories.destroy',2) }}" method="POST">
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
