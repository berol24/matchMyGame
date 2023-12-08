<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MatchmakingController extends Controller
{
    public function startSearch(Request $request)
    {
        $user = $request->user();
        $user->update(['is_searching' => true]);

        dispatch(new MatchmakingJob($user));

        return response()->json(['message' => 'Recherche de match commencée'], 200);
    }

    public function stopSearch(Request $request)
    {
        $user = $request->user();
        $user->update(['is_searching' => false]);


        return response()->json(['message' => 'Recherche de match arrêtée'], 200);
    }

    public function matchFound(Request $request, User $matchedUser)
    {
        $user = $request->user();


        return response()->json(['message' => 'Match trouvé avec ' . $matchedUser->username], 200);
    }
}
