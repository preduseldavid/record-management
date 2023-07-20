<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ImageMovie
 *
 * @property int $id
 * @property int $movie_id
 * @property string $url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Movie $movie
 *
 * @package App\Models
 */
class ImageMovie extends Model
{
	protected $table = 'image_movie';

	protected $casts = [
		'movie_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'url'
	];

	public function movie(): BelongsTo
    {
		return $this->belongsTo(Movie::class);
	}
}
