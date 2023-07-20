<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class RatingMovie
 *
 * @property int $id
 * @property int $movie_id
 * @property string $source
 * @property string $rating
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Movie $movie
 *
 * @package App\Models
 */
class RatingMovie extends Model
{
	protected $table = 'rating_movie';

	protected $casts = [
		'movie_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'source',
		'rating'
	];

	public function movie(): BelongsTo
    {
		return $this->belongsTo(Movie::class);
	}
}
