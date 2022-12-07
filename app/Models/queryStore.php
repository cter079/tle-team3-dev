<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeQuery extends Model{
    use HasFactory;

    protected $table = 'savedqueries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'body', 'status'
    ];
   public $timestamps = false;
  
  
}