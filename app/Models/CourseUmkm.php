<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseUmkm
 * 
 * @property int $id
 * @property int|null $id_umkms
 * @property int|null $id_courses
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CourseUmkm extends Model
{
	protected $table = 'course_umkms';

	protected $casts = [
		'id_umkms' => 'int',
		'id_courses' => 'int'
	];

	protected $fillable = [
		'id_umkms',
		'id_courses'
	];
}
