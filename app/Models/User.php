<?php

namespace App\Models;

use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    // public function hasRole($role)
    // {
    //     return $this->role_id === $role; // Sesuaikan ini dengan logika peran Anda
    // }

    public static function hasRoles($role_names)
    {
        if (Auth::check())
        {
            $role_names = explode('|', $role_names);
            // create array to store multiple roles to check
            $check_role = User::select('roles_ms.name')
                ->join('roles_ms', 'roles_ms.id', '=', 'users.role_id')
                ->where('users.id', Auth::User()->id)
                ->where(function ($query) use ($role_names)
                {
                    $query->orWhereIn('roles_ms.name', $role_names);
                })
                ->first();

            return $check_role;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password','regist_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
