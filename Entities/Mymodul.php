<?php

namespace Modules\Mymodul\Entities;

use Illuminate\Database\Eloquent\Model;

class Mymodul extends Model
{
	protected $table = 'mymodul';
    protected $fillable = ['title','content'];
}
