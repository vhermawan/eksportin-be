<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * 
 * @property int $id
 * @property string|null $title
 * @property int|null $id_category_courses
 * @property int|null $id_speakers
 * @property string|null $photo
 * @property string|null $description
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'courses';

	protected $casts = [
		'id_category_courses' => 'int',
		'id_speakers' => 'int'
	];

	protected $fillable = [
		'title',
		'id_category_courses',
		'id_speakers',
		'photo',
		'description',
		'slug'
	];

	protected $appends = ['image_URL'];
	public function getImageURLAttribute()
    {
        if ($this->photo != null) {
			return asset($this->photo);
        }
    }
}
