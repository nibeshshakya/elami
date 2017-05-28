<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Carrer
 * 
 * @property int $id
 * @property string $jobtitle
 * @property string $edutitle
 * @property string $salary
 * @property int $usersid
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Carrer extends Eloquent
{
	protected $table = 'carrer';
	public $timestamps = false;

	protected $casts = [
		'usersid' => 'int'
	];

	protected $fillable = [
		'jobtitle',
		'edutitle',
		'salary',
		'usersid'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'usersid');
	}
}
