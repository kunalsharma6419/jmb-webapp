<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function conversations()
    {
        
        return $this->hasMany(Conversation::class,'sender_id')->orWhere('receiver_id',$this->id)->whereNotDeleted();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users'); 
    }

    public function hasPermission($permission)
    {
        return $this->roles()
            ->join('permission_roles', function ($join) {
                $join->on('roles.id', '=', 'permission_roles.role_id')
                     ->whereNull('permission_roles.deleted_at'); 
            })
            ->join('permissions', function ($join) {
                $join->on('permission_roles.permission_id', '=', 'permissions.id')
                     ->whereNull('permissions.deleted_at'); 
            })
            ->where('permissions.title', $permission) 
            ->exists(); 
    }

    /**
     * The channels the user receives notification broadcasts on.
     */
    public function receivesBroadcastNotificationsOn(): string
    {
        return 'users.'.$this->id;
    }

}
