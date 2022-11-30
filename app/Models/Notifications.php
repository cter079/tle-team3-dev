<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model{
    use HasFactory;

    protected $table = 'notifications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'message', 'body', 'account-id'
    ];
   public $timestamps = false;
  
  
}