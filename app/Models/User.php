<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable,  HasRoles;

    public const SUPER_ADMIN_ROLE = 'Super Admin';

    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function stockOpnameAssignments(): HasMany {
        return $this->hasMany(StockOpnameAssignment::class);
    }

    public function stockOpnames(): HasMany {
        return $this->hasMany(StockOpname::class);
    }

    public function createdBy(): HasMany {
        return $this->hasMany(StockOpname::class, 'created_by', 'id');
    }
    public function approvedBy(): HasMany {
        return $this->hasMany(StockOpname::class, 'approved_by', 'id');
    }

    public function checkedBy(): HasMany {
        return $this->hasMany(StockOpnameItem::class, 'checked_by', 'id');
    }

    public function hasRole(string $role): Bool {
        return $this->role === $role;
    }

    public function isAdmin(): Bool {
        return $this->role === 'admin';
    }

    public function isStaff(): Bool {
        return $this->role === 'staff';
    }
    public function isHeadMaster(): Bool {
        return $this->role === 'headmaster';
    }
}
