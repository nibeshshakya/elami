<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Userinfo
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $dob
 * @property string $email
 * @property float $height
 * @property string $sex
 * @property int $age
 * @property string $countryliving
 * @property string $contact
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $user_id
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Userinfo extends Eloquent
{
	protected $table = 'userinfo';

	protected $casts = [
		'height' => 'float',
		'age' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'dob'
	];

	protected $fillable = [
		'name',
		'dob',
		'email',
		'height',
		'sex',
		'age',
		'countryliving',
		'contact',
		'user_id',
        'picture'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
