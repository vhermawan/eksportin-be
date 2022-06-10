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
 * @property string|null $id_speakers
 * @property string|null $photo_url
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
		'id_category_courses' => 'int'
	];

	protected $fillable = [
		'title',
		'id_category_courses',
		'id_speakers',
		'photo_url',
		'description',
		'slug'
	];

	protected $appends = ['image_URL'];
	public function getImageURLAttribute()
    {
        if ($this->photo_url != null) {
			return asset($this->photo_url);
        }
    }
}
