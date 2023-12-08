<?php

use App\Services\FortniteService;

function getFortnitePlayerData(FortniteService $fortniteService, $username)
{
    $playerData = $fortniteService->getPlayerData($username);
    return view('fortnite-player-profile', ['playerData' => $playerData]);
}
