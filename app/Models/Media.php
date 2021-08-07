<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = ['model_type', 'model_id', 'file_name', 'mime_type', 'collection_name'];

    public function mediable()
    {
        return $this->morphTo('media');
    }
    public function getMediaUrl()
    {
        return url('/' . "media/$this->collection_name/$this->id/$this->file_name");
    }

    public function getMediaIcon()
    {
        switch ($this->mime_type) {
            case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
                return "word.png";
            case "application/pdf":
                return "pdf.png";
            case "text/plain":
                return "text.png";
            case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
                return "excel.png";
        }
    }
}
