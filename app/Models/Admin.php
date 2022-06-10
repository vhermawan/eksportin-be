<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $id
 * @property int|null $id_cms_users
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $photo_url
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admins';

	protected $casts = [
		'id_cms_users' => 'int'
	];

	protected $fillable = [
		'id_cms_users',
		'name',
		'phone',
		'photo_url',
		'slug'
	];
}
