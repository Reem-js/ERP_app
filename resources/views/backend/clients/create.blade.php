@extends('layouts.app', ['activePage' => 'createclient', 'titlePage' => __('translation.website.sidebar.create client')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.create client') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form >
                                <div class="form-group m-4" >
                                    <p class="font-weight-bold text-black" for="inputAddress">{{ __('translation.clients.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold text-black"
                                        for="inputAddress">{{ __('translation.clients.Nickname') }}</label>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold text-black"
                                        for="inputAddress">{{ __('translation.clients.Phone') }}</label>
                                    <input type="text" name="phone" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold text-black"   for="inputAddress">{{ __('translation.clients.Email') }}</label>
                                    <input type="password" name="password" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4" >
                                    <p class="font-weight-bold text-black"
                                        for="inputAddress">{{ __('translation.clients.Address') }}</label>
                                    <input type="password" name="confirmpassword" class="form-control" id="inputAddress"
                                        required placeholder="1234 Main St">
                                </div>

                                <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-primary m-4" >{{__('translation.website.crud.create')}}</button>
                                            <button type="submit" class="btn btn-primary m-4" >{{__('translation.website.crud.Create & New')}}</button>
                                        </div>
                                        <div class="col-lg-2 offset-6">
                                            <button type="submit" class="btn btn-danger m-4"  >{{__('translation.website.crud.Cancel')}}</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
