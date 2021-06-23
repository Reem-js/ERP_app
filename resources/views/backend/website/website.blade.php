@extends('layouts.app', ['activePage' => 'website', 'titlePage' => __('translation.website.sidebar.Website Info')])



@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card card-mode">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text" style="width:20%; text-align:center;">
                        <h4 class="card-title">{{ __("translation.website.sidebar.Website Info") }}</h4>
                    </div>
                </div>
                <div class="card-body m-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <p  style="font-weight:400;  ">{{__('translation.website info.Website Name')}}</p>
                                <input type="text" name="price" class="form-control" id="websitename" required placeholder="{{__('translation.website info.AL-RAYAN')}}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">

                                <p  style="font-weight:400;  ">{{__('translation.website info.Website Phone')}}</p>
                                <input type="text" name="price" class="form-control" id="phone" required placeholder="{{__('translation.website info.tel')}}">
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <p  style="font-weight:400;  ">{{__('translation.website info.Preffered Langauge')}}</p>

                                <select class="form-group form-control " style="width: 100%;">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                    <option value="{{ $localeCode }}">{{ $properties['native'] }}</option>

                                    @endforeach


                                </select>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <p  style="font-weight:400;  ">{{__('translation.website info.Teams')}}</p>
                                <select class="form-group form-control " style="width: 100%;">
                                    <option value="1">{{__('translation.website.crud.Yes')}}</option>
                                    <option value="0">{{__('translation.website.crud.No')}}</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <p  style="font-weight:400;  ">{{__('translation.website info.Product translation')}}</p>
                                <select class="form-group form-control " style="width: 100%;">
                                    <option value="1">{{__('translation.website.crud.Yes')}}</option>
                                    <option value="0">{{__('translation.website.crud.No')}}</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">

                                <p  style="font-weight:400;  ">{{__('translation.website info.Website Logo')}}</p>
                                <img src="{{url('images/upload.jpg')}}" width="500" height="600">


                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-info">{{__('translation.website.crud.update')}}</button>
                            <button type="submit" class="btn btn-info">{{__('translation.website.crud.Update & Return')}}</button>
                        </div>
                        <div class="col-lg-2 offset-2">
                            <button type="submit" class="btn btn-danger">{{__('translation.website.crud.Cancel')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
