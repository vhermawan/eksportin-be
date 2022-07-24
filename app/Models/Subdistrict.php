<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subdistrict
 * 
 * @property int $subdis_id
 * @property string|null $subdis_name
 * @property int|null $dis_id
 *
 * @package App\Models
 */
class Subdistrict extends Model
{
	protected $table = 'subdistricts';
	protected $primaryKey = 'subdis_id';
	public $timestamps = false;

	protected $casts = [
		'dis_id' => 'int'
	];

	protected $fillable = [
		'subdis_name',
		'dis_id'
	];
}
