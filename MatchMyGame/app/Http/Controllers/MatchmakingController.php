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

        // Ajoute la logique pour arrêter la recherche ici

        return response()->json(['message' => 'Recherche de match arrêtée'], 200);
    }

    public function matchFound(Request $request, User $matchedUser)
    {
        $user = $request->user();

        // Ajoute la logique pour gérer le match trouvé ici
        // Cela pourrait inclure l'envoi de notifications, la création de canaux de communication, etc.

        return response()->json(['message' => 'Match trouvé avec ' . $matchedUser->username], 200);
    }
}
