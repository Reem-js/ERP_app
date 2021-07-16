{{-- <div> --}}
{{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{-- <div class="table-responsive"> --}}
    <table class=" table text-center table-bordered ">
        <thead>

            <tr>
                <th width="5%">#</th>
                <th width="50%">{{ __('translation.purchase.product') }}</th>
                <th width="10%">{{ __('translation.purchase.quantity') }}</th>
                <th width="10%">{{ __('translation.purchase.Unit Purchase Price') }}</th>
                <th width="10%">{{ __('translation.purchase.Unit Selling Price') }}</th>
                <th width="10%">{{ __('translation.purchase.total cost') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tr as $key => $value)
                {!! $value !!}
            @endforeach
            <tr>
                <td width="5%" colspane=4>
                    <div width="20px" wire:click="addTr({{ count($tr) }})" class="btn btn-outline-info">
                        {{ __('translation.purchase.add row') }}</div>
                </td>
            </tr>

        </tbody>
    </table>
{{-- </div> --}}
{{-- </div> --}}
