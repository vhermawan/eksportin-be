<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Speaker
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $photo
 * @property string|null $email
 * @property string|null $gender
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Speaker extends Model
{
	protected $table = 'speakers';

	protected $fillable = [
		'name',
		'photo',
		'email',
		'gender'
	];
}
