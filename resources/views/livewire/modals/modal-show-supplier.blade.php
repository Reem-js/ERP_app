<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{ __('translation.suppliers.Supplier Name') }}</th>
            <th scope="col">{{ __('Purchase Price') }}</th>
            <th scope="col">{{ __('Sale Price') }}</th>
            <th scope="col">{{ __('translation.products.Stock') }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1"></label>
                </div>
            </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2"></label>
                </div>
            </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
          </tr>
        </tbody>
    </table>
    <button class="btn btn-success">{{__('translation.profile.Save')}}</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('translation.website.crud.Cancel')}}</button>
</form>
