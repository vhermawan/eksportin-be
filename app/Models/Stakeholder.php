<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Stakeholder
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $photo_url
 * @property string|null $description
 * @property int|null $id_category_stakeholders
 * @property string|null $slug
 * @property string|null $bussiness_entity
 * @property string|null $services
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Stakeholder extends Model
{
	protected $table = 'stakeholders';

	protected $casts = [
		'id_category_stakeholders' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'phone',
		'photo',
		'description',
		'id_category_stakeholders',
		'slug',
		'bussiness_entity',
		'services'
	];

	protected $appends = ['image_URL'];
	public function getImageURLAttribute()
    {
        if ($this->photo == null) {
            abort(404);
        }
        return asset($this->photo);
    }
}
