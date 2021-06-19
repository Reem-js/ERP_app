{{-- button For Test  --}}
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Open Modal
</button> --}}
 <!-- modal start -->
 <div class="modal fade modal-dialog-scrollable " id="exampleModalLong"
  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog  {{$modalSize}}" role="document">
      <div class="modal-content">

        <div class="modal-body" id="modal-body">

        </div>
        <div class="modal-footer" id="modal-action">
          {{-- {!! $modalActions !!} --}}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
