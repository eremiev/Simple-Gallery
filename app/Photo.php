<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';


    /**
     *  Get translation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function translation()
    {
        return $this->hasOne(PhotoTranslation::class)->where('lang', app()->getLocale());
    }

    /**
     * Get all of the objects photos.
     */
    public function images()
    {
        return $this->morphMany('App\Imageable', 'imageables');
    }
}
