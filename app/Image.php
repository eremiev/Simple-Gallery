<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imageable';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path'
    ];

    /**
     * Get all of the owning imagenable models.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
