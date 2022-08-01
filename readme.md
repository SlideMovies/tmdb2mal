# TMDb2MAL

## What is this?
This is a project (in PHP) which takes in TMDB IDs and season numbers, and returns the MyAnimeList ID.

## How does this work?
It uses the TMDb API to get the season air date, and then searches on MyAnimeList (using Jikan.moe) to get the MAL ID.

## Why would somebody need this?
I needed it, because I was getting data from TMDb, but needed MyAnimeList to display the sources.

## Nice, but I don't want to host it myself
You can use the already hosted version: https://tmdb2mal.slidemovies.org/?id={tmdb_id}&s={season_number}

## Thanks to
Jikan.moe ([www.jikan.moe](https://jikan.moe)) & The TMDb API ([api.themoviedb.org](https://api.themoviedb.org))
