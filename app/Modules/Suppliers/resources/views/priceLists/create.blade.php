@extends('layouts.app', ['activePage' => 'createpricelist', 'titlePage' => __('translation.website.sidebar.Create New Price List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-mode">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{{ __('translation.website.sidebar.Create New Price List') }}</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="m-5">
              <form>
            <div class="row">
                <div class=" col form-group" >
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.pricelists.Name') }}</p>
                  <input type="text" name="pricelistname" class="form-control" id="pricelistname" required>
                </div>

                <div class=" col form-group" >
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.pricelists.Made in') }}</p>
                  <input type="text" name="madein" class="form-control" id="madein" required>
                </div>
                <div class=" col form-group">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.pricelists.Price') }}</p>
                  <input type="number" name="price" class="form-control" id="price" required>
                </div>
            </div>
            <br>
                <div class="form-group" >
                  <p class="font-weight-bold"  for="selSupplier">{{ __('translation.pricelists.Supplier') }}</label>
                    <br>
                    <select id="selSupplier" class="form-group form-control " style="width: 100%;">
                      <option value="0">{{ __('translation.pricelists.select supplier') }}</option>
                      <option value="1">Audi</option>
                      <option value="2">BMW</option>
                      <option value="3">Citroen</option>
                      <option value="4">Ford</option>
                      <option value="5">Honda</option>
                      <option value="6">Jaguar</option>

                    </select>
                </div>


                <br>

                <div class="row">
                  <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary">{{__('translation.website.crud.create')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('translation.website.crud.Create & New')}}</button>
                  </div>
                  <div class="col-lg-2 offset-6">
                    <button type="submit" class="btn btn-danger">{{__('translation.website.crud.Cancel')}}</button>
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
@push('js')
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selSupplier").select2();
        });
    </script>

@endpush