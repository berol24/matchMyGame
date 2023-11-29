<?php

class UserController extends Controller {
    public function getUserInfo($id) {
        $user = User::findOrFail($id);

        $fortniteService = new FortniteService();
        $valorantService = new ValorantService();
        $csgoService = new CsgoService();

        $fortniteInfo = $fortniteService->getPlayerData($user->fortnite_username);
        $valorantInfo = $valorantService->getPlayerData($user->valorant_username);
        $csgoInfo = $csgoService->getPlayerData($user->steam_id);

        return response()->json([
            'user' => $user,
            'fortniteInfo' => $fortniteInfo,
            'valorantInfo' => $valorantInfo,
            'csgoInfo' => $csgoInfo,
        ]);
    }
}
