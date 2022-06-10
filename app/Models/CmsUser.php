<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


/**
 * Class CmsUser
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $photo
 * @property string|null $email
 * @property string|null $password
 * @property int|null $id_cms_privileges
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $status
 *
 * @package App\Models
 */
class CmsUser extends Authenticatable
{

	use Notifiable, HasApiTokens;

	protected $table = 'cms_users';

	protected $casts = [
		'id_cms_privileges' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'photo',
		'email',
		'password',
		'id_cms_privileges',
		'status'
	];
}
