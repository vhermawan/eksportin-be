<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LikeNews
 * 
 * @property int $id
 * @property int|null $id_news
 * @property int|null $count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LikeNews extends Model
{
	protected $table = 'like_news';

	protected $casts = [
		'id_news' => 'int',
		'count' => 'int'
	];

	protected $fillable = [
		'id_news',
		'count'
	];
}
