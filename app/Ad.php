<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ad extends Model
{
    protected $dates = ['created_at', 'deleted_at'];

    protected $fillable = [
        'name', 'city', 'address', 'phone', 'category_id', 'description', 'price', 'user_id', 'image',
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
}