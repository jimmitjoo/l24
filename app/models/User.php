<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Fields available to insert data to
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'tele',
        'password'
    ];


    public static $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|same:password_confirmation',
        'terms' => 'required'
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attribute to see when the user deleted itself
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * This has one record in UserInfo
     */
    public function info()
    {
        return $this->hasOne('UserInfo');
    }

}
