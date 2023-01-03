<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model{
    use HasFactory;

    protected $table = 'chats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'body', 'status'
    ];
   public $timestamps = false;
  
  
}