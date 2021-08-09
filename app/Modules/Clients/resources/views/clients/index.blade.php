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
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <a href="{{ route('clients.create') }}" class="btn btn-round btn-primary mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> {{__('translation.website.crud.create')}}</a>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('clients::translation.clients.ID') }}</th>
                                            <th>{{ __('clients::translation.clients.Name') }}</th>
                                            <th>{{ __('clients::translation.clients.Nickname') }}</th>
                                            <th>{{ __('clients::translation.clients.Phone') }}</th>
                                            <th>{{ __('clients::translation.clients.Address') }}</th>
                                            <th>{{ __('clients::translation.clients.Actions') }}</th>
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

                                                <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Show Client') }}"  href="{{ route('clients.show',5) }}"  ><i class="material-icons">visibility</i></a>
                                                <a class="btn btn-info" rel="tooltip" title="{{ __('translation.title.Edit Client') }}" href="{{ route('clients.edit',5) }}" >  <i class="material-icons">edit</i> </a>
                                                <a class="btn btn-danger"rel="tooltip"  title="{{ __('translation.title.Delete Client') }}" onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}" href="javascript:void(0)"><i class="material-icons">close</i></a>
                                                <form  method="post" action="{{ route('clients.destroy',5) }}" class="d-none" id="delete-1">
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
