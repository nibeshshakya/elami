<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Org
 * 
 * @property string $id
 * @property string $name
 * @property string $contact
 * @property string $serviceid
 * 
 * @property \App\Models\Service $service
 *
 * @package App\Models
 */
class Org extends Eloquent
{
	protected $table = 'org';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'contact',
		'serviceid'
	];

	public function service()
	{
		return $this->belongsTo(\App\Models\Service::class, 'serviceid');
	}
}
