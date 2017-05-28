<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Entity
 * 
 * @property string $serviceid
 *
 * @package App\Models
 */
class Entity extends Eloquent
{
	protected $table = 'entity';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'serviceid'
	];
}
