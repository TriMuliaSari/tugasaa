<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $guarded = ['Name'];

    public function friends()
{
	return $this->hasMany('App\Models\friends');
}
}