<?php

use App\Services\ValorantService;

public function getValorantPlayerData(ValorantService $valorantService, $username)
{
    $playerData = $valorantService->getPlayerData($username);
    return view('valorant-player-profile', ['playerData' => $playerData]);
}
