<div>
    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold"   style="color:black;" for="inputAddress">{{ __("translation.suppliers.Supplier Name") }}</p>
        <input type="text" name="name" class="form-control" id="inputAddress" required
            placeholder="1234 Main St">
    </div>

    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;"
            for="inputAddress">{{ __("translation.suppliers.Phone") }}</label>
        <input type="text" name="phone" class="form-control" id="inputAddress" required
            placeholder="1234 Main St">
    </div>

    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;"
            for="inputAddress">{{ __("translation.suppliers.Email") }}</label>
        <input type="password" name="password" class="form-control" id="inputAddress" required
            placeholder="1234 Main St">
    </div>

    <div class="form-group form-file-upload form-file-multiple" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;" for="inputAddress">
            {{ __('translation.suppliers.Price Lists') }}</p>
        <input type="file" multiple="" class="inputFileHidden">
        <div class="input-group">
            <input type="text" name="media" class="form-control inputFileVisible"
                placeholder="Multiple Files" multiple>
            <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                    <i class="material-icons">layers</i>
                </button>
            </span>
        </div>
    </div>
</div>
