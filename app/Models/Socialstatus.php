<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Socialstatus
 * 
 * @property int $id
 * @property string $mothertongue
 * @property string $religion
 * @property string $caste
 * @property int $intercaste
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $user_id
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Socialstatus extends Eloquent
{
	protected $table = 'socialstatus';

	protected $casts = [
		'intercaste' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'mothertongue',
		'religion',
		'caste',
		'intercaste',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
