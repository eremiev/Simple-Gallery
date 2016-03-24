<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photo_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'lang',
        'name',
        'description',
    ];
}
