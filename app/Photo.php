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
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function translation()
    {
        return $this->hasOne(PhotoTranslation::class)->where('lang', app()->getLocale());
    }

    public function translations()
    {
        return $this->hasMany(PhotoTranslation::class);
    }

    /**
     * Get all of the objects photos.
     */
    public function images()
    {
        return $this->morphMany('App\Imageable', 'imageables');
    }
}
