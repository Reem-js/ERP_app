@extends('layouts.app', ['activePage' => 'mostSaleProducts', 'titlePage' => __('translation.website.sidebar.Most Sold Products')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xl">
                            <div class="card-header card-header-text card-header-info">
                                <div class="card-text">
                                    <h4 class="card-title ">{{__('translation.website.sidebar.Most Sold Products')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border mb-3 " style=" border: width 20px;">
                        <div class="card-body ">
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group col-6 " style="margin: 20px;">
                                                <label class="font-weight-bold form-label" style="color:black;" for="inputAddress">{{ __('translation.reports.From') }}</label>
                                                <input type="date" name="date" class="form-control" id="inputAddress" required placeholder="please choose transaction date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold" style="color:black;" for="status">{{ __('translation.reports.Status') }}</label>
                                                <select id='status' style='width:100%'>
                                                    <option value='0'>Select Transaction</option>
                                                    <option value='1'>Transaction 1</option>
                                                    <option value='2'>Sonarika Bhadoria</option>
                                                    <option value='3'>Anil Singh</option>
                                                    <option value='4'>Vishal Sahu</option>
                                                    <option value='5'>Mayank Patidar</option>
                                                    <option value='6'>Vijay Mourya</option>
                                                    <option value='7'>Rakesh sahu</option>
                                                    <option value='8'>Madonna Mikhail</option>
                                                    <option value='9'>Glal Husseiny</option>
                                                    <option value='10'>Menna Glal</option>
                                                    <option value='11'>Reem</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group col-6" style="margin: 20px;">
                                                <label class="font-weight-bold" style="color:black;" for="inputAddress">{{ __('translation.reports.to') }}</label>
                                                <input type="date" name="date" class="form-control" id="inputAddress" required placeholder="please choose transaction date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold" style="color:black;" for="every">{{ __('translation.reports.Every') }}</label>
                                                <select id='every' style='width:100%'>
                                                    <option value='0'>Day</option>
                                                    <option value='1'>Week</option>
                                                    <option value='2'> Month</option>
                                                    <option value='3'>Year</option>
                                                    <option value='4'>Quarter</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-warning" style="margin: 10px;">{{__('translation.reports.Filter')}}</button>
                                    <button type="reset" class="btn btn-outline-warning" style="margin: 10px;">{{__('translation.reports.Reset')}}</button>

                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{__('translation.reports.Month')}}</th>
                                        <th class="text-center">{{__('translation.reports.Product Name')}}</th>
                                        <th>{{__('translation.reports.Supplier')}}</th>
                                        <th>{{__('translation.reports.Sold Quantity')}}</th>
                                        <th>{{__('translation.website.crud.Actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">ree</td>
                                        <td class="text-center">هيونداى</td>
                                        <td>اكسسوارات</td>
                                        <td>130 جنيه</td>

                                        <td class="td-actions">
                                            <div class="d-flex justify-content-space-between">
                                                <a title="{{__('translation.reports.Show Top Five Products')}}" rel="tooltip" class="btn btn-info" style="margin: 0 2px 0 0;" href="{{route('products.show',2)}}">
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