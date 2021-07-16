@extends('layouts.app', ['activePage' => 'allUserTransactions', 'titlePage' => __('translation.website.sidebar.All Transactions')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">

                        <div class="card card-mode">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __('translation.website.sidebar.All Transactions') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">


                        <div class="col-lg-12 text-right">
                            <a href="{{ route('user-wallet-transactions.create') }}" class="btn btn-primary btn-round mb-3" rel="tooltip"  title="{{ __('translation.title.Create Transaction') }}"
                            ><i class="fa fa-plus-circle" aria-hidden="true"></i>
                            {{ __('translation.website.crud.create') }}</a>                        </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-right">{{ __('translation.walletTransaction.ID') }}</th>
                                <th class="text-center">{{ __('translation.walletTransaction.Reason') }}</th>
                                <th>{{ __('translation.walletTransaction.Date') }}</th>
                                <th>{{ __('translation.walletTransaction.Transaction') }}</th>
                                <th>{{ __('translation.walletTransaction.Transaction Type') }}</th>
                                <th>{{ __('translation.walletTransaction.Amount') }}</th>
                                <th>{{ __('translation.walletTransaction.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td>&euro; 99,225</td>
                                <td>&euro; 99,225</td>
                                <td class="td-actions">

                                    <a class="btn btn-info" href="#" ><i
                                            class="material-icons">visibility</i></a>
                                        <a class="btn btn-info" href="{{ route('user-wallet-transactions.edit', 5) }}" rel="tooltip"  title="{{ __('translation.title.Edit Transaction') }}"
                                            > <i class="material-icons">edit</i> </a>
                                        <a class="btn btn-danger" rel="tooltip"  title="{{ __('translation.title.Delete Transaction') }}"
                                            onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                            href="javascript:void(0)"><i class="material-icons">close</i></a>
                                        <form method="post" class="d-none" action="{{ route('user-wallet-transactions.destroy', 5) }}"
                                             id="delete-1">
                                            @csrf
                                            @method('delete')
                                        </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
