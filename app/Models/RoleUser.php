<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use SoftDeletes; // Ensure soft deletes are enabled

    protected $fillable = ['user_id', 'role_id', 'deleted_at'];
}
