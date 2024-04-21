<?php

namespace App\Models\OriginalPermission;

use Spatie\Permission\Models\Permission as OriginalPermission;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    // You might set a public property like guard_name or connection, or override other Eloquent Model methods/properties
}

class Permission extends OriginalPermission
{
    protected $fillable = [
        'name',
        'email',
        'updated_at',
        'created_at',
    ];
}
