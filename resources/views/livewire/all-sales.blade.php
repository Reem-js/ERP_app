{{-- <div class="table-responsive-sm"> --}}
<div>
    <table  class="table text-center table-bordered" >
        {{-- col-sm-12 col-md-12 col-lg-12 --}}
        <thead>
            <tr>
                <th># {{-- session()->get('radio_value') --}}</th>
                <th class="w-25">{{ __('translation.sales.Items') }}</th>
                <th id="supplier_id_get_by_click" class="w-25">{{ __('translation.sales.Supplier') }}</th>
                <th >{{ __('translation.sales.QTY') }}</th>
                <th>{{ __('translation.sales.Price') }}</th>
                <th>{{ __('translation.sales.Amount') }}</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ $chosen_supplier_id }} --}}
            @foreach($tr as $key=>$value)
            {!!  $value !!}
            @endforeach
            
        </tbody>
    </table>
    <div wire:click="addTr({{$x}})" class="btn btn-outline-info">{{ __('translation.sales.add row') }}</div>
    <script>
        $(document).ready(function() {
            $(".item_dropdown").select2();
            // document.getElementById('supplier_id_get_by_click').innerHTML = "tttttt";
        });
        // document.getElementById('supplier_id_get_by_click').click(function(){
        //     document.getElementById('supplier_id_get_by_click').innerHTML = "tttttt";
        // });
    </script>
</div>
