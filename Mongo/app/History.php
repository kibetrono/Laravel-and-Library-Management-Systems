<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'historicals';
    
    protected $fillable = [
        'site_title', 'site_link','site_keywords','site_description','filename',
    ];
}
