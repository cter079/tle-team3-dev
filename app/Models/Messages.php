<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model{
    use HasFactory;

    protected $table = 'chat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'body', 'status', 'account_id', 'chat_id'
    ];
   public $timestamps = false;
  
  
}