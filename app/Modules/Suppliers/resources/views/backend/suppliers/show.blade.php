@extends('layouts.app', ['activePage' => 'show-suppliers', 'titlePage' => __('translation.website.sidebar.Show Supplier Details')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Basic Information') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">{{ __('translation.suppliers.ID') }}</th>
                                        <th class="font-weight-bold">{{ __('translation.suppliers.Name') }}</th>
                                        <th class="font-weight-bold" >{{ __('translation.suppliers.Nickname') }}</th>
                                        <th class="font-weight-bold">{{ __('translation.suppliers.Phone') }}</th>
                                        <th class="font-weight-bold">{{ __('translation.suppliers.Address') }}</th>
                                        <th class="font-weight-bold">{{ __('translation.suppliers.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td>&euro; 99,225</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Edit Supplier') }}"  href="{{ route('suppliers.edit', 5) }}"
                                                > <i class="material-icons">edit</i> </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Supplier Products') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">{{__('translation.products.id')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Product Name')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Brand')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Category')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Primary Purchase Price')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Primary Sale Price')}}</th>
                                        <th class="font-weight-bold">{{__('translation.products.Total Stock')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> كفة مرآة فيرنا يمين 2018</td>
                                        <td>اكسسوارات</td>
                                        <td>19 جنيه</td>
                                        <td>19 جنيه</td>
                                        <td>1900</td>
                                        <td>1900</td>
                                        <td>19 جنيه</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Price List') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">{{__('translation.pricelists.ID')}}</th>
                                        <th class="font-weight-bold">{{__('translation.pricelists.Name')}}</th>
                                        <th class="font-weight-bold">{{__('translation.pricelists.Price')}}</th>
                                        <th class="font-weight-bold">{{__('translation.pricelists.Made in')}}</th>
                                        <th class="font-weight-bold">{{__('translation.website.crud.Actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> كفة مرآة فيرنا يمين 2018</td>
                                        <td>اكسسوارات</td>
                                        <td>19 جنيه</td>
                                        <td>1900</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Edit Supplier') }}"  href="{{ route('suppliers.edit', 5) }}"
                                                > <i class="material-icons">edit</i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div >
                                <img style="width:10%"  src="{{ asset('images/pdf.png') }}" alt="">
                                <img style="width:10%" src="{{ asset('images/pdf.png') }}" alt="">
                                <img style="width:10%" src="{{ asset('images/pdf.png') }}" alt="">


                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Purchases') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">{{__('translation.purchase.ID')}}</th>
                                        <th class="font-weight-bold">{{__('translation.purchase.Type')}}</th>
                                        <th class="font-weight-bold">{{__('translation.purchase.Total')}}</th>
                                        <th class="font-weight-bold">{{__('translation.purchase.Purchase Date')}}</th>
                                        <th class="font-weight-bold">{{__('translation.purchase.Recieve Date')}}</th>
                                        <th class="font-weight-bold">{{__('translation.purchase.Status')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> كفة مرآة فيرنا يمين 2018</td>
                                        <td>اكسسوارات</td>
                                        <td>19 جنيه</td>
                                        <td>1-2-2020</td>
                                        <td>25-5-2020</td>
                                        <td>on</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Installment') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">{{__('translation.sales.ID')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Type')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Total')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Order Date')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Recieve Date')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Discount')}}</th>
                                        <th class="font-weight-bold">{{__('translation.sales.Status')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> كفة مرآة فيرنا يمين 2018</td>
                                        <td>اكسسوارات</td>
                                        <td>19 جنيه</td>
                                        <td>19 جنيه</td>

                                        <td>1-2-2020</td>
                                        <td>25-5-2020</td>
                                        <td>on</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">

                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Supplier Wallet') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a class="btn btn-info" rel="tooltip"  title="{{ __('translation.title.show Transactions') }}"  href="{{ route('get.supplier.wallet.trans',5) }}" ><i class="material-icons">visibility</i></a>
                                    <a class="btn btn-info" rel="tooltip"  title="{{ __('translation.title.Add Transaction') }}" href="{{ route('supplier-wallet-transactions.create', 5) }}"
                                        > <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">

                                                <i class="material-icons">
                                                    account_balance_wallet
                                                </i>
                                            </div>
                                            <p class="card-category">{{__('translation.wallet.Total Balance')}}</p>
                                            <h3 class="card-title">49/50
                                                <small>EGP</small>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <span class="material-icons">
                                                    account_balance_wallet
                                                </span>
                                                <a href="#pablo">Get More Space...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">store</i>
                                            </div>
                                            <p class="card-category">{{ __('translation.wallet.Number Of Transactions') }}</p>
                                            <h3 class="card-title">49/50

                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                {{-- <i class="material-icons text-danger">warning</i> --}}
                                                <span class="material-icons">
                                                    account_balance_wallet
                                                </span>
                                                <a href="#pablo">Get More Space...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">paid</i>
                                            </div>
                                            <p class="card-category">{{__('translation.wallet.Total Paied')}}</p>
                                            <h3 class="card-title">49/50
                                                <small>EGP</small>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                {{-- <i class="material-icons text-danger">warning</i> --}}
                                                <span class="material-icons">
                                                    account_balance_wallet
                                                </span>
                                                <a href="#pablo">Get More Space...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">info_outline</i>
                                            </div>
                                            <p class="card-category">{{ __('translation.wallet.Pending')}}</p>
                                            <h3 class="card-title">49/50
                                                <small>EGP</small>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                {{-- <i class="material-icons text-danger">warning</i> --}}
                                                <span class="material-icons">
                                                    account_balance_wallet
                                                </span>
                                                <a href="#pablo">Get More Space...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection