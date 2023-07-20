<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Movie
 *
 * @property int $id
 * @property string|null $title
 * @property Carbon|null $year
 * @property string|null $rated
 * @property Carbon|null $release_year
 * @property string $imdb_id
 * @property string|null $runtime
 * @property string|null $genre
 * @property string|null $director
 * @property string|null $writer
 * @property string|null $actors
 * @property string|null $plot
 * @property string|null $language
 * @property string|null $country
 * @property string|null $awards
 * @property string|null $poster
 * @property int|null $metascore
 * @property float|null $imdb_rating
 * @property int|null $imdb_votes
 * @property string|null $type
 * @property Carbon|null $dvd
 * @property string|null $box_office
 * @property string|null $production
 * @property string|null $website
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ImageMovie[] $images
 * @property Collection|RatingMovie[] $ratings
 *
 * @package App\Models
 */
class Movie extends Model
{
	const PER_PAGE = 5;

	protected $table = 'movies';

	protected $casts = [
		'year' => 'int',
		'release_year' => 'int',
		'metascore' => 'int',
		'imdb_rating' => 'float',
		'imdb_votes' => 'int',
		'dvd' => 'datetime'
	];

	protected $fillable = [
		'title',
		'year',
		'rated',
		'release_year',
		'imdb_id',
		'runtime',
		'genre',
		'director',
		'writer',
		'actors',
		'plot',
		'language',
		'country',
		'awards',
		'poster',
		'metascore',
		'imdb_rating',
		'imdb_votes',
		'type',
		'dvd',
		'box_office',
		'production',
		'website'
	];

	public function images(): HasMany
    {
		return $this->hasMany(ImageMovie::class);
	}

	public function ratings(): HasMany
    {
		return $this->hasMany(RatingMovie::class);
	}
}
