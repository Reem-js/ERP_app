<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;
use Suppliers\Models\Supplier;

class DeleteMedia extends Component
{
    public $media; // get from db
    public $supplier_id; // get from edit blade

    public function getMedia()
    {
        $this->media = Media::where('model_id',$this->supplier_id)->get();
        // dd($this->media);
    }

    public function deleteMedia($media_id,$supplier_id)
    {
        Supplier::find($supplier_id)->deleteSingleMedia('pricelists',$media_id);
    }
    public function render()
    {
        $this->getMedia();
        return view('Suppliers::livewire.delete-media',['supplier_media'=>$this->media,'supplier_id'=>$this->supplier_id]);
    }
}
