<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Watchlist extends Controller
{
    protected function create($movieId) 
    {
        Watchlist::create([
            'user_id' => auth()->user()->id,
            'movies_id' => $movieId,
        ]);
        return redirect() -> back ();
    }
    protected function destroy($watchlistId)
    {
        $watchlistId = Watchlist::where('id', $watchlistId)->first();
        $watchlistId->delete();
        return redirect() -> back();
    }

    //hämta elementer i listan?? moviesController??
}
