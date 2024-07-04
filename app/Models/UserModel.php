<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserModel extends Authenticatable
{
 protected $table = 'user';
 protected $primaryKey = 'id_user';
 public $timestamps = false;
}
