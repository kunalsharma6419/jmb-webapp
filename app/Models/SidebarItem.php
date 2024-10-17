<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SidebarItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['menu_item', 'url', 'icon', 'permission_id', 'parent_id'];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function children()
    {
        return $this->hasMany(SidebarItem::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(SidebarItem::class, 'parent_id');
    }
}
