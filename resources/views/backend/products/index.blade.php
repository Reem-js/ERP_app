@extends('layouts.app', ['activePage' => 'allProducts', 'titlePage' => __('translation.website.sidebar.All Products')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{__('translation.website.sidebar.Stock')}}</h4>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('translation.website.crud.Number') }}</th>
                                            <th>{{__('translation.products.Product Name')}}</th>
                                            <th>{{__('translation.products.Brand')}}</th>
                                            <th>{{__('translation.products.Category')}}</th>
                                            <th>{{__('translation.products.Primary Purchase Price')}}</th>
                                            <th>{{__('translation.products.Primary Sale Price')}}</th>
                                            <th>{{__('translation.products.Total Stock')}}</th>
                                            <th>{{__('translation.website.crud.Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>مرآة</td>
                                            <td>هيونداى</td>
                                            <td>اكسسوارات</td>
                                            <td>130 جنيه</td>
                                            <td>800 حنيه</td>
                                            <td>1000 قطعة</td>
                                            <td class="td-actions">
                                                <div class="d-flex justify-content-space-between">
                                                    <a title="{{__('translation.website.crud.Update')}}"  rel="tooltip" class="btn btn-info" style="margin: 0 2px 0 0;" href="{{route('products.edit',2)}}">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a title="{{__('translation.website.crud.Show')}}"  rel="tooltip" class="btn btn-info" style="margin: 0 2px 0 0;" href="{{route('products.show',2)}}">
                                                        <i class="fa fa-eye text-white" aria-hidden="true"></i>
                                                    </a>
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
