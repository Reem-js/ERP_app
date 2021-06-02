@extends('layouts.app', ['activePage' => 'edit-users', 'titlePage' => __('translation.website.sidebar.Edit User')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit User') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Email') }}</p>
                                    <input type="email" name="email" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Phone') }}</p>
                                    <input type="text" name="phone" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Password') }}</p>
                                    <input type="password" name="password" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Confirm Password') }}</p>
                                    <input type="password" name="confirmpassword" class="form-control" id="inputAddress"
                                        required placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.Role') }}</label>
                                        <select class="form-group form-control" name="role" id="role">
                                            <option value="0">{{ __('translation.users.Super Admin') }}</option>
                                            <option value="1">{{ __('translation.users.Data Admin') }}</option>
                                        </select>
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
