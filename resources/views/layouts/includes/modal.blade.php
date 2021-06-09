{{-- button For Test  --}}
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Open Modal
</button> --}}
 <!-- modal start -->
 <div class="modal fade" id="exampleModalLong"
  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog  {{$modalSize}}" role="document">
      <div class="modal-content">
        <div class="modal-header {{$modalTitleColor}}">
          <h5 class="modal-title " id="exampleModalLongTitle">{!! $modalTitle !!}</h5>
          <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! $modalBody !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          {!! $modalActions !!}
        </div>
      </div>
    </div>
</div>
  <!-- modal end -->
  {{-- Include For Test  --}}
   {{-- @include('layouts.includes.modal',
        ['modalSize'=>"modal-lg",
        'modalTitleColor'=>"",
        'modalTitle'=>"first modal",
        'modalBody'=>"<h1>Your First Modal Body Is Here</h1>",
        'modalActions'=>"<button class='btn btn-primary'>Save Changes</button>"
        ]) --}}
