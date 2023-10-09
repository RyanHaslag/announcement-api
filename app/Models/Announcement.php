<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'announcements';

    public $timestamps = true;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'date',
        'body'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];
}
