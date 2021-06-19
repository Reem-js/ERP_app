{{-- <div> --}}
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table class=" table text-center table-bordered " >
        <thead>

            <tr>
                <th >#</th>
                <th>{{ __('translation.purchase.product') }}</th>
                <th>{{ __('translation.purchase.quantity') }}</th>
                <th>{{ __('translation.purchase.Unit Purchase Price') }}</th>
                <th>{{ __('translation.purchase.Unit Selling Price') }}</th>
                <th>{{ __('translation.purchase.total cost') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tr as $key=>$value)
            {!!  $value !!}
            @endforeach
            <tr><td  colspane=6> <div wire:click="addTr({{count($tr)}})"  class="btn btn-outline-warning"
               >{{ __('translation.purchase.add row') }}</div></td></tr>

        </tbody>
    </table>
{{-- </div> --}}
