<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            // MANDATORY FIELDS
            $table->string('title')->nullable()->default(null);
            $table->year('year')->nullable()->default(null);
            $table->string('rated')->nullable()->default(null);
            $table->year('release_year')->nullable()->default(null);
            $table->string('imdb_id');

            // OPTIONAL FIELDS
            $table->string('runtime')->nullable()->default(null);
            $table->string('genre')->nullable()->default(null);
            $table->string('director')->nullable()->default(null);
            $table->string('writer')->nullable()->default(null);
            $table->string('actors')->nullable()->default(null);
            $table->string('plot')->nullable()->default(null);
            $table->string('language')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('awards')->nullable()->default(null);
            $table->string('poster')->nullable()->default(null);
            $table->integer('metascore')->nullable()->default(null);
            $table->float('imdb_rating')->nullable()->default(null);
            $table->integer('imdb_votes')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->date('dvd')->nullable()->default(null);
            $table->string('box_office')->nullable()->default(null);
            $table->string('production')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
