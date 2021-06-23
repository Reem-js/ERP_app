@extends('layouts.app', ['activePage' => 'allexpensestypes', 'titlePage' => __('translation.website.sidebar.All Expenses
Types')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{ __('translation.website.sidebar.All Expenses Types') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('expensesTypes.create') }}" class="btn btn-primary btn-round"
                                style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}  ; font-weight: bold;"><i
                                    class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('translation.expenses types.id') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ __('translation.expenses types.Expense Type') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ __('translation.expenses types.Actions') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Develop</td>
                                            <td></td>
                                            <td></td>
                                            <td class="td-actions">
                                                <a class="btn btn-info" rel="tooltip"
                                                    title="{{ __('translation.expenses.Edit') }}"
                                                    href="{{ route('expensesTypes.edit', 5) }}" style="color:white;"> <i
                                                        class="material-icons">edit</i> </a>
                                                <a class="btn btn-danger" rel="tooltip"
                                                    title="{{ __('translation.expenses.Delete') }}"
                                                    onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                                    href="javascript:void(0)"><i class="material-icons">close</i></a>
                                                <form method="post" action="{{ route('expensesTypes.destroy', 5) }}"
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
            </div>
        </div>
    </div>
    </div>
@endsection
