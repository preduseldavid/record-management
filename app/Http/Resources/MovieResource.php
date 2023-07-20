<?php

namespace App\Http\Resources;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var $data Movie */
        $data = $this;

        return [
            'id' => $data->id,
            'title' => $data->title,
            'year' => $data->year,
            'rated' => $data->rated,
            'release_year' => $data->release_year,
            'imdb_id' => $data->imdb_id,
            'runtime' => $data->runtime,
            'genre' => $data->genre,
            'director' => $data->director,
            'writer' => $data->writer,
            'actors' => $data->actors,
            'plot' => $data->plot,
            'language' => $data->language,
            'country' => $data->country,
            'awards' => $data->awards,
            'poster' => $data->poster,
            'metascore' => $data->metascore,
            'imdb_rating' => $data->imdb_rating,
            'imdb_votes' => $data->imdb_votes,
            'type' => $data->type,
            'dvd' => $data->dvd,
            'box_office' => $data->box_office,
            'production' => $data->production,
            'website' => $data->website,
            'created_at' => $data->created_at,
            'updated_at' => $data->updated_at,

            'images' => ImageMovieCollection::collection($this->whenLoaded('images')),
            'ratings' => RatingMovieCollection::collection($this->whenLoaded('ratings')),
        ];
    }
}
