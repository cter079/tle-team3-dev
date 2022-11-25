<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model{
    use HasFactory;

    protected $table = 'queries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'body', 'status'
    ];
   public $timestamps = true;
  
  
}