<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistories extends Model
{
    protected $guarded = array('id');
    
    public static $rules =array(
        'name' => 'required',
        'edited_at' => 'required',
    );
}
