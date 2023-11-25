<?php

class GameController extends Controller {
    public function startSearch(Request $request) {
        $user = auth()->user();

        $search = new Search();
        $search->user_id = $user->id;
        $search->game = $request->input('game');
        $search->save();

        // Logique pour rechercher des partenaires de jeu ici...

        return response()->json(['message' => 'Recherche lancée avec succès']);
    }

    public function initiateCall(Request $request) {
        // Logique pour initier un appel vocal ici...

        return response()->json(['message' => 'Appel vocal lancé avec succès']);
    }
}
