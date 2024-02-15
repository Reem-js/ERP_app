@extends('layouts.app', ['activePage' => 'createPermission', 'titlePage' => __('translation.website.sidebar.Create Permission')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Create Permission') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="m-5">
                                <form>
                                    <div class="form-group">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.permissions.Name') }}</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="crud" value="1"
                                                id="customControlAutosizing">
                                            <label class="custom-control-label"
                                                for="customControlAutosizing">{{ __('translation.permissions.Crud Permissions') }}</label>
                                        </div>
                                    </div>
                            </div>
                            @include('crudButtons.create-buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
