<?php

namespace App;

use App\Models\Input;
use App\Models\Job;
use App\Models\Output;
use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fstName','lstName','email', 'password','job_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }

    /**
     * Get the job of a user.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * Get the output for user.
     */
    public function outputs()
    {
        return $this->hasMany(Output::class);
    }

    /**
     * Get the output for user.
     */
    public function inputs()
    {
        return $this->hasMany(Input::class);
    }
}
