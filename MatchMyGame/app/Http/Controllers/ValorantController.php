<?php

use App\Services\ValorantService;

function getValorantPlayerData(ValorantService $valorantService, $username)
{
    $playerData = $valorantService->getPlayerData($username);
    return view('valorant-player-profile', ['playerData' => $playerData]);
}
