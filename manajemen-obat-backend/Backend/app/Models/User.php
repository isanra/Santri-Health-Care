<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens; // <--- tambahkan
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; // <--- include HasApiTokens
    // ...
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    /**
 * Simple role checker.
 * Works with:
 * - a `roles()` relation (many-to-many with Role model)
 * - or a `role` string column on users table
 * - or a boolean `is_admin` column
 *
 * Usage: $user->hasRole('pharmacist') or $user->hasRole(['admin','pharmacist'])
 */
public function hasRole($role): bool
{
    // 1) jika ada relasi roles()
    if (method_exists($this, 'roles')) {
        if (is_array($role)) {
            return $this->roles()->whereIn('name', $role)->exists();
        }
        return $this->roles()->where('name', $role)->exists();
    }

    // 2) jika ada kolom role (string)
    if (isset($this->role)) {
        if (is_array($role)) {
            return in_array($this->role, $role, true);
        }
        return $this->role === $role;
    }

    // 3) fallback: is_admin boolean
    if (isset($this->is_admin)) {
        // treat 'admin' as is_admin = true if someone checks hasRole('admin')
        if (is_string($role) && strtolower($role) === 'admin') {
            return (bool) $this->is_admin;
        }
        if (is_array($role)) {
            return in_array('admin', array_map('strtolower', $role), true) && (bool) $this->is_admin;
        }
        return (bool) $this->is_admin;
    }

    return false;
}

}
