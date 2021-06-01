@extends('layouts.app', ['activePage' => 'edit-clients', 'titlePage' => __('translation.website.sidebar.Edit Client')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit Client') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main Sv">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.Nickname') }}</p>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.Email') }}</p>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.Phone') }}</p>
                                    <input type="text" name="phone" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.clients.Address') }}</p>
                                    <input type="text" name="address" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <button type="submit" class="btn btn-info"
                                        style="margin: 20px;">{{ __('translation.website.crud.update') }}</button>
                                    <button type="submit" class="btn btn-info"
                                        style="margin: 20px;">{{ __('translation.website.crud.Update & Return') }}</button>
                                    <button type="submit" class="btn btn-danger"
                                        style="margin: 20px; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">{{ __('translation.website.crud.Cancel') }}</button>
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
