<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property int|null $id_category_news
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property int|null $id_cms_users
 * @property int|null $duration
 * @property string|null $photo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'news';

	protected $casts = [
		'id_category_news' => 'int',
		'id_cms_users' => 'int',
		'duration' => 'int'
	];

	protected $fillable = [
		'id_category_news',
		'title',
		'slug',
		'description',
		'id_cms_users',
		'duration',
		'photo'
	];

	protected $appends = ['image_URL'];
	public function getImageURLAttribute()
    {
      if ($this->photo == null) {
          return null;
      }
      return asset($this->photo);
    }

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
}
