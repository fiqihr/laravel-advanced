<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPerson extends Model
{
    protected $table = 'dataperson';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email'];
}