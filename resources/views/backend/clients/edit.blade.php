@extends('layouts.app', ['activePage' => 'edit-clients', 'titlePage' => __('translation.clients.common.Edit Client')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.clients.common.Edit Client') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.common.Name') }}</p>
                                        <input type="text" name="name" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main Sv">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.common.Nickname') }}</p>
                                        <input type="email" name="email" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.common.Email') }}</p>
                                        <input type="email" name="email" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.common.Phone') }}</p>
                                        <input type="text" name="phone" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.common.Address') }}</p>
                                        <input type="text" name="address" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>


                                <button type="submit" class="btn btn-warning"
                                    style="margin: 20px;">{{ __('translation.website.crud.update') }}</button>
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
