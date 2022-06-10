<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Umkm
 * 
 * @property int $id
 * @property int|null $id_cms_users
 * @property string|null $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $photo_url
 * @property string|null $description
 * @property int|null $id_category_umkms
 * @property string|null $slug
 * @property string|null $bussiness_entity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Umkm extends Model
{
	protected $table = 'umkms';

	protected $casts = [
		'id_cms_users' => 'int',
		'id_category_umkms' => 'int'
	];

	protected $fillable = [
		'id_cms_users',
		'name',
		'address',
		'phone',
		'photo_url',
		'description',
		'id_category_umkms',
		'slug',
		'bussiness_entity'
	];

	public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}

	protected $appends = ['image_URL'];
	public function getImageURLAttribute()
    {
        if ($this->photo_url != null) {
					return asset($this->photo_url);
        }
    }
}
