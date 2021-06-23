@extends('layouts.app', ['activePage' => 'all-clients', 'titlePage' => __('translation.website.sidebar.all Clients')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <div class="card card-mode">
                            <div class="card-header card-header-text card-header-primary">
                              <div class="card-text">
                                <h4 class="card-title">{{__('translation.website.sidebar.all Clients')}}</h4>
                              </div>
                            </div>
                            <div class="card-body">

                                <a href="{{ route('clients.create') }}" rel="tooltip" title="{{ __('translation.title.create client') }}" class="btn btn-primary btn-round"  style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i> {{__('translation.website.crud.create')}}</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('translation.clients.ID') }}</th>
                                            <th>{{ __('translation.clients.Name') }}</th>
                                            <th>{{ __('translation.clients.Nickname') }}</th>
                                            <th>{{ __('translation.clients.Phone') }}</th>
                                            <th>{{ __('translation.clients.Address') }}</th>
                                            <th>{{ __('translation.clients.Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                            <td class="text-center">2</td>
                                            <td>Andrew Mike</td>
                                            <td>Develop</td>
                                            <td>2013</td>
                                            <td >&euro; 99,225</td>
                                            <td class="td-actions">

                                                <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Show Client') }}"  href="{{ route('clients.show',5) }}" style="color:white;" ><i class="material-icons">visibility</i></a>
                                                <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Edit Client') }}" href="{{ route('clients.edit',5) }}"  style="color:white;" >  <i class="material-icons">edit</i> </a>
                                                <a class="btn btn-danger"rel="tooltip"  title="{{ __('translation.title.Delete Client') }}" onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}" href="javascript:void(0)"><i class="material-icons">close</i></a>
                                                <form  method="post" action="{{ route('clients.destroy',5) }}" style="display:none;" id="delete-1">
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
