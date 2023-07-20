<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Movie::with('images', 'ratings')->paginate(Movie::PER_PAGE);

        return new MovieCollection($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        $movie = new Movie($request->all());
        $movie->save();

        return response()->json([], ResponseAlias::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movie->load('images', 'ratings');

        return response()->json(new MovieResource($movie));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update($request->all());

        return response()->json([], ResponseAlias::HTTP_NO_CONTENT);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json([], ResponseAlias::HTTP_NO_CONTENT);
    }
}
