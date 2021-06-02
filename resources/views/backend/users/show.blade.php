@extends('layouts.app', ['activePage' => 'show-users', 'titlePage' => __('translation.website.sidebar.Show User Details')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Basic Information') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >{{ __('translation.users.ID') }}</th>
                                        <th>{{ __('translation.users.Name') }}</th>
                                        <th>{{ __('translation.users.Email') }}</th>
                                        <th>{{ __('translation.users.Phone') }}</th>
                                        <th>{{ __('translation.users.Role') }}</th>
                                        <th>{{ __('translation.users.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="{{ route('users.edit',5) }}">Andrew Mike</a></td>
                                        <td>2013</td>
                                        <td>2013</td>

                                        <td >&euro; 99,225</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip"  title="{{ __('translation.title.Edit User') }}"  href="{{ route('users.edit', 5) }}"
                                                style="color:white;"> <i class="material-icons">edit</i> </a>
                                         
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.User History') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center font-weight-bold " >{{ __('translation.adminhistory.Date') }}</th>
                                        <th class="text-center font-weight-bold " >{{ __('translation.adminhistory.User Name') }}</th>
                                        <th colspan="5" class="text-center font-weight-bold">{{ __('translation.adminhistory.Action') }}</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  first  --}}
                                    <tr>
                                        <td class="text-center font-weight-bold" rowspan="5">Today</td>
                                        <td class="text-center font-weight-bold" rowspan="5"><a href="{{ route('users.edit',5) }}">madonna</a></td>
                                        <td colspan="5" class="text-center" > invouce number <a href="#" >145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> purchase number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> installment number <a href="#">145236</a> has been done</td>

                                    </tr>   <tr>                                        
                                        <td colspan="5" class="text-center" > add product number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center" > edit in supplier</td>
                                    </tr>

                                    {{--  second  --}}
                                    <tr>
                                        <td class="text-center font-weight-bold" rowspan="5">Yesterday</td>
                                        <td class="text-center font-weight-bold" rowspan="5"><a href="{{ route('users.edit',5) }}">menna</a></td>

                                        <td colspan="5" class="text-center" > invouce number <a href="#" >145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> purchase number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> installment number <a href="#" >145236</a> has been done</td>

                                    </tr>   <tr>                                        
                                        <td colspan="5" class="text-center" > add product number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center" > edit in supplier</td>
                                    </tr>

                                    {{--  third  --}}
                                    <tr>
                                        <td class="text-center font-weight-bold" rowspan="5">31-8-2021</td>
                                        <td class="text-center font-weight-bold" rowspan="5"><a href="{{ route('users.edit',5) }}">glal</a></td>

                                        <td colspan="5" class="text-center" > invouce number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> purchase number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center"> installment number <a href="#">145236</a> has been done</td>

                                    </tr>   <tr>                                        
                                        <td colspan="5" class="text-center" > add product number <a href="#">145236</a> has been done</td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="5" class="text-center" > edit in supplier</td>
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
