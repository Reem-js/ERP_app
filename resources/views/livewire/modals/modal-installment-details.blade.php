
    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;" for="inputAddress">
            {{ __('Installment period') }}</p>
        <input type="text" name="name" class="form-control" id="inputAddress" required
            placeholder="1234 Main St">
    </div>
    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;" for="inputAddress">
            {{ __('Installment per') }}: </p>
            <input type="text" name="email" class="form-control" id="inputAddress" required
                placeholder="1234 Main St">
    </div>
    <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;" for="inputAddress">
            {{ __('Down Payment') }}</p>
            <input type="text" name="email" class="form-control" id="inputAddress" required
                placeholder="1234 Main St">
    </div>
     <div class="form-group" style="margin: 20px;">
        <p class="font-weight-bold" style="color:black;" for="inputAddress">
            {{ __('Start Date') }}</p>
            <input type="text" name="email" class="form-control" id="inputAddress" required
                placeholder="1234 Main St">
    </div>
    <div class="form-group" style="margin: 20px;">
        <button type="submit" class="btn btn-primary" style="margin: 20px;">{{__('translation.website.crud.create')}}</button>                          </form>
        <button type="submit" class="btn btn-danger"  style="margin: 20px; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">{{__('translation.website.crud.Cancel')}}</button>
    </div>

