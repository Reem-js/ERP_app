{{-- <div> --}}
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table style="" class="table-responsive text-center table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('translation.sales.Items') }}</th>
                <th>{{ __('translation.sales.Supplier') }}</th>
                <th>{{ __('translation.sales.QTY') }}</th>
                <th>{{ __('translation.sales.Price/item') }}</th>
                <th>{{ __('translation.sales.Amount') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tr as $key=>$value)
            {!!  $value !!}
            @endforeach
            <tr>
                <td colspane=6>
                    <div wire:click="addTr({{$x}})" class="btn btn-outline-warning">{{ __('translation.sales.add row') }}</div>
                </td>
            </tr>
        </tbody>
    </table>
{{-- </div> --}}
