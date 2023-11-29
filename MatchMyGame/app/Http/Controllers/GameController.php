<?php

class GameController extends Controller {
    public function startSearch(Request $request) {
        $user = auth()->user();

        $search = new Search();
        $search->user_id = $user->id;
        $search->game = $request->input('game');
        $search->save();


        return response()->json(['message' => 'Recherche lancée avec succès']);
    }

    public function initiateCall(Request $request) {

        return response()->json(['message' => 'Appel vocal lancé avec succès']);
    }
}
