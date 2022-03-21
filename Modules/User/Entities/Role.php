<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Guard;
use Spatie\Permission\PermissionRegistrar;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Role extends \Spatie\Permission\Models\Role
{
    use BelongsToTenant;


    public static function create(array $attributes = [])
    {
        $attributes['guard_name'] = $attributes['guard_name'] ?? Guard::getDefaultName(static::class);

        $params = ['name' => $attributes['name'], 'guard_name' => $attributes['guard_name'],'tenant_id' => $attributes['tenant_id']];
        if (PermissionRegistrar::$teams) {
            if (array_key_exists(PermissionRegistrar::$teamsKey, $attributes)) {
                $params[PermissionRegistrar::$teamsKey] = $attributes[PermissionRegistrar::$teamsKey];
            } else {
                $attributes[PermissionRegistrar::$teamsKey] = app(PermissionRegistrar::class)->getPermissionsTeamId();
            }
        }
        if (static::findByParam($params)) {
            throw RoleAlreadyExists::create($attributes['name'], $attributes['guard_name']);
        }

        return static::query()->create($attributes);
    }

}
