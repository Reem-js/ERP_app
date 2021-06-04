@extends('layouts.app', ['activePage' => 'allRoles', 'titlePage' => __('translation.website.sidebar.All Roles')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title " style="font-weight: bold;">{{ __('translation.website.sidebar.All Roles') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{route('roles.create')}}" class="btn btn-primary btn-round"
                                style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}; font-weight: bold;"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('translation.roles.ID') }}</th>
                                        <th>{{ __('translation.roles.Name') }}</th>
                                        <th>{{ __('translation.website.crud.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td >3</td>
                                        <td>Andrew Mike</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip" href="#" title="{{__('translation.expenses.Show')}}"
                                             style="color:white;"><i  class="material-icons">visibility</i></a>

                                            <a class="btn btn-info" rel="tooltip" title="{{__('translation.expenses.Edit')}}"
                                                href="{{route('roles.edit',5)}}"
                                                style="color:white;"> <i class="material-icons">edit</i> </a>
                                            <a class="btn btn-danger" rel="tooltip" title="{{__('translation.expenses.Delete')}}"
                                                onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                                href="javascript:void(0)"><i class="material-icons">close</i></a>
                                            <form method="post"
                                                action="{{route('roles.destroy',6)}}"
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
@endsection
