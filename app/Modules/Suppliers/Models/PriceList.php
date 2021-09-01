<?php

namespace Suppliers\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PriceList extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'name',
        'price',
        'made_in',
        'supplier_id',
        'notes',
        'slug'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

        /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name','id']
            ]
        ];
    }
}
