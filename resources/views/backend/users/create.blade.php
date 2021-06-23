@extends('layouts.app', ['activePage' => 'createUser', 'titlePage' => __('translation.website.sidebar.Add New User')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Add New User') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Name') }}</label>
                                        <input type="text" name="name" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Email') }}</label>
                                        <input type="email" name="email" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Password') }}</label>
                                        <input type="password" name="password" class="form-control" id="inputAddress"
                                            required placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Confirm Password') }}</label>
                                        <input type="password" name="confirmpassword" class="form-control" id="inputAddress"
                                            required placeholder="1234 Main St">
                                </div>

                                <div class="form-group m-4">
                                    <p class="font-weight-bold" for="inputAddress">
                                        {{ __('translation.users.Role') }}</label>
                                        <select class="form-group form-control" name="role" id="role">
                                            <option value="0">{{ __('translation.users.Super Admin') }}</option>
                                            <option value="1">{{ __('translation.users.Data Admin') }}</option>
                                        </select>
                                </div>




                                <div class="row mt-5">
                                    <div class="col-lg-4">
                                        <button type="submit"
                                            class="btn btn-primary m-4">{{ __('translation.website.crud.create') }}</button>
                                        <button type="submit"
                                            class="btn btn-primary m-4">{{ __('translation.website.crud.Create & New') }}</button>
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
    </div>
    </div>
@endsection
