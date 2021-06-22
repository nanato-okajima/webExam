<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Consts\UserConst;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
        'test_datetime' => 'datetime',

    ];

    /**
     * 氏名のフルネーム(姓名)を作成
     * @return String
     */
    public function getFullNameAttribute()
    {
        return $this->last_name . " " . $this->first_name;
    }

    /**
     * ユーザステータスを日本語名に変換
     * @return String
     */
    public function getUserStatusAttribute()
    {
        return  UserConst::USER_STATUS_LIST[$this->status];
    }

    /**
     * 性別を日本語名に変換
     * @return String
     */
    public function getGenderJpAttribute()
    {
        return  UserConst::GENDER_LIST[$this->gender];
    }
}
