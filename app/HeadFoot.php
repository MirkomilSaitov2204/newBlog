<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadFoot extends Model
{
    protected $table = 'head_feet';

    protected $fillable = [
        'head_title',
        'head_name',
        'head_text',
        'foot_address',
        'foot_number',
        'foot_email',
        'foot_copy'
    ];
}
