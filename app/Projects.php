<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';
    
    protected $fillable = [
        'title', 'url', 'summary', 'shortsummary', 'amount', 'raised', 'doc_url', 'video_url', 'img', 'owner_id', 'challenge', 'info', 'url1', 'url2', 'url3', 'url4', 'am'
    ];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
