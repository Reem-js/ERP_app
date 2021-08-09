<div class="row">
    @forelse ($supplier_media as $media)
        <div class="col-2 ">
            <p wire:click="deleteMedia({{ $media->id }},{{ $supplier_id }})"
                class="badge badge-danger rounded-circle " style="cursor: pointer;">X</p>
            <img src="{{ asset('images/' . $media->getMediaIcon()) }}" class="w-100" alt="{{ $media->file_name }}">
            <a class="" href="{{ $media->getMediaUrl() }}">{{ $media->file_name }}</a>
        </div>
    @empty
        <div class="col-12 h4">{{ __('translation.suppliers.No Price List') }}</div>
    @endforelse
</div>
