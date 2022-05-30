<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    public $table = "services";
    public $primarykey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps = false;
}
