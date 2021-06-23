@extends('layouts.app', ['activePage' => 'show-clients', 'titlePage' => __('translation.website.sidebar.Show clients Details')])

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
                                        <th style="font-weight: 900;">{{ __('translation.clients.ID') }}</th>
                                        <th style="font-weight: 900;">{{ __('translation.clients.Name') }}</th>
                                        <th style="font-weight: 900;" >{{ __('translation.clients.Nickname') }}</th>
                                        <th style="font-weight: 900;">{{ __('translation.clients.Phone') }}</th>
                                        <th style="font-weight: 900;">{{ __('translation.clients.Address') }}</th>
                                        <th style="font-weight: 900;">{{ __('translation.clients.Actions') }}</th>
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
                                            <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Edit Client') }}"  href="{{ route('clients.edit', 5) }}"
                                                style="color:white;"> <i class="material-icons">edit</i> </a>
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
                                <h4 class="card-title">{{ __('translation.website.sidebar.Sales') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="font-weight: 900;">{{__('translation.sales.ID')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Type')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Total')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Order Date')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Recieve Date')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Discount')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Status')}}</th>

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
                                <h4 class="card-title">{{ __('translation.website.sidebar.Installment') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="font-weight: 900;">{{__('translation.sales.ID')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Type')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Total')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Order Date')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Recieve Date')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Discount')}}</th>
                                        <th style="font-weight: 900;">{{__('translation.sales.Status')}}</th>

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
                                <h4 class="card-title">{{ __('translation.website.sidebar.Client Wallet') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a class="btn btn-info" rel="tooltip"  title="{{ __('translation.title.show Transactions') }}"  href="{{ route('get.client.wallet.trans',5) }}" style="color:white;"><i class="material-icons">visibility</i></a>
                                    <a class="btn btn-info" rel="tooltip"  title="{{ __('translation.title.Add Transaction') }}" href="{{ route('client-wallet-transactions.create', 5) }}"
                                        style="color:white;"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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
