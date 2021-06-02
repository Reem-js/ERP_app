@extends('layouts.app', ['activePage' => 'allUserTransactions', 'titlePage' => __('translation.website.sidebar.All Transactions')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __('translation.website.sidebar.All Transactions') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                    <a href="{{ route('user-wallet-transactions.create') }}" class="btn btn-primary btn-round" rel="tooltip"  title="{{ __('translation.title.Create Transaction') }}"
                        style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        {{ __('translation.website.crud.create') }}</a>
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

                                    <a class="btn btn-info" href="#" style="color:white;"><i
                                            class="fa fa-eye"></i></a>
                                        <a class="btn btn-info" href="{{ route('user-wallet-transactions.edit', 5) }}" rel="tooltip"  title="{{ __('translation.title.Edit Transaction') }}"
                                            style="color:white;"> <i class="material-icons">edit</i> </a>
                                        <a class="btn btn-danger" rel="tooltip"  title="{{ __('translation.title.Delete Transaction') }}"
                                            onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                            href="javascript:void(0)"><i class="material-icons">close</i></a>
                                        <form method="post" action="{{ route('user-wallet-transactions.destroy', 5) }}"
                                            style="display:none;" id="delete-1">
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
