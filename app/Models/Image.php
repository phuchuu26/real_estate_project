<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    protected $primaryKey = 'image_id';

    protected $keyType = 'int';

    protected $fillable = [
        'real_estate_id',
        'image_id',
        'image_path',
    ];

    public $timestamps = false;
    // protected $dates = ['deleted_at'];
}
