<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    public $timestapms = false;
    protected $table="peoples";
    protected $primaryKey='id';
}
