<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const Role = 'User';
    const Role_Admin = 'Moderator';


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getDate(){
        $user = User::get();
        $user_id = [];
        foreach ($user as $users){
            $user_id[] = $user->id;
        }
        return $user_id[array_rand($user_id)];
    }
}
