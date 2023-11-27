<?php

// app/Http/Controllers/GameAccountController.php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameAccount;

class GameAccountController extends Controller
{
    public function link(Request $request, $gameType, $gameAccountId)
    {
        $user = $request->user();

        // Vérifie si le compte de jeu est déjà lié
        $existingAccount = GameAccount::where('user_id', $user->id)
            ->where('game_type', $gameType)
            ->where('game_account_id', $gameAccountId)
            ->first();

        if ($existingAccount) {
            return response()->json(['message' => 'Le compte de jeu est déjà lié.'], 422);
        }

        // Lie le compte de jeu à l'utilisateur
        GameAccount::create([
            'user_id' => $user->id,
            'game_type' => $gameType,
            'game_account_id' => $gameAccountId,
        ]);

        return response()->json(['message' => 'Compte de jeu lié avec succès'], 200);
    }

    // ... autres méthodes du contrôleur ...
}

