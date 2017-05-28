<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $carrers
 * @property \Illuminate\Database\Eloquent\Collection $criteria
 * @property \Illuminate\Database\Eloquent\Collection $socialstatuses
 * @property \Illuminate\Database\Eloquent\Collection $userinfos
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'username',
		'password'
	];

	public function carrers()
	{
		return $this->hasMany(\App\Models\Carrer::class, 'usersid');
	}

	public function criteria()
	{
		return $this->hasMany(\App\Models\Criterion::class);
	}

	public function socialstatuses()
	{
		return $this->hasMany(\App\Models\Socialstatus::class);
	}

	public function userinfos()
	{
		return $this->hasMany(\App\Models\Userinfo::class);
	}
}
