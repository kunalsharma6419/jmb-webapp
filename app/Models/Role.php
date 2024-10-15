<?php
namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes; // Allows for soft deletion of roles
    use HasFactory; // Enables factory methods for model testing

    public $table = 'roles'; // The name of the database table

    protected $dates = [
        'created_at', // Timestamp for creation
        'updated_at', // Timestamp for last update
        'deleted_at', // Timestamp for soft deletion
    ];

    protected $fillable = [
        'title', // The title of the role
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Define a many-to-many relationship with the Permission model
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles'); // Specify pivot table
    }
    

    // Define a many-to-many relationship with the User model
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users'); 
    }

    // Customize date serialization format
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s'); // Standard date format
    }
}
