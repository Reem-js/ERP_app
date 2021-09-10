{{-- <div> --}}
{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div>
    <table class=" table text-center table-bordered ">
        <thead>

            <tr>
                <th>#</th>
                <th >{{ __('translation.purchase.product') }}</th>
                <th >{{ __('translation.pricelists.Made in') }}</th>
                <th >{{ __('translation.pricelists.Price') }}</th>
                <th>{{ __('translation.pricelists.Notes') }}</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tr as $key => $value)
                {!! $value !!}
            @endforeach
        </tbody>
    </table>
    <div  wire:click="addTr({{$x}})" class="btn btn-outline-info">
        {{ __('translation.purchase.add row') }}</div>
</div>
