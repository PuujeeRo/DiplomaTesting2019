<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_detail extends Model
{
    //
    protected $table => 'project_detail'

    protected $fillable = [
        'title', 'firstname', 'lastname', 'email', 'password', 'is_admin'
    ]

    protected $guarded = [];
}
