@extends('layouts.app', ['activePage' => 'edit-clients', 'titlePage' => __('translation.website.sidebar.Edit Client')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit Client') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.clients.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main Sv">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.clients.Nickname') }}</p>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.clients.Email') }}</p>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.clients.Phone') }}</p>
                                    <input type="text" name="phone" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.clients.Address') }}</p>
                                    <input type="text" name="address" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="row mt-5">
                                    <div class="col-lg-4">
                                        <button type="submit"
                                            class="btn btn-info m-4">{{ __('translation.website.crud.update') }}</button>
                                        <button type="submit"
                                            class="btn btn-info m-4">{{ __('translation.website.crud.Update & Return') }}</button>
                                    </div>
                                    <div class="col-lg-2 offset-6">
                                        <button type="submit"
                                            class="btn btn-danger m-4">{{ __('translation.website.crud.Cancel') }}</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
