<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 22 May 2017 06:52:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Service
 * 
 * @property string $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $Column
 * 
 * @property \Illuminate\Database\Eloquent\Collection $orgs
 *
 * @package App\Models
 */
class Service extends Eloquent
{
	protected $table = 'service';
	public $incrementing = false;

	protected $casts = [
		'Column' => 'int'
	];

	protected $fillable = [
		'name',
		'Column'
	];

	public function orgs()
	{
		return $this->hasMany(\App\Models\Org::class, 'serviceid');
	}
}
