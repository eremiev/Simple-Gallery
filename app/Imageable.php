<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageable extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imageables';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
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
