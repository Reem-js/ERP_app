<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table class="table text-center table-bordered border-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('translation.sales.Item') }}</th>
                <th>{{ __('translation.sales.Supplier') }}</th>
                <th>{{ __('translation.sales.QTY') }}</th>
                <th>{{ __('translation.sales.Price/item') }}</th>
                <th>{{ __('translation.sales.Amount') }}</th>
                {{--  <th>{{ __('translation.sales.Actions') }}</th>  --}}


            </tr>
        </thead>
        <tbody>
            @foreach($tr as $key=>$value)
            {!!  $value !!}
            @endforeach
            <tr><td  colspane=5> <div wire:click="addTr({{count($tr)}})"  class="btn btn-outline-warning"
               >{{ __('translation.sales.add row') }}</div></td></tr>
        </tbody>
    </table>
</div>
