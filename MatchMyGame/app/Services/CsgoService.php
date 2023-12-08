<?php

namespace App\Services;

use GuzzleHttp\Client;

class CsgoService
{
    protected $httpClient;
    protected $apiKey;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.steampowered.com/',
        ]);
        $this->apiKey = 'YOUR_API_KEY'; // Remplacez par votre clé d'API CS:GO
    }

    public function getPlayerData($steamId)
    {
        $parameters = [
            'key' => $this->apiKey,
            'steamid' => $steamId,
        ];

        $response = $this->httpClient->get('ISteamUserStats/GetUserStatsForGame/v0002/', ['query' => $parameters]);
        $data = json_decode($response->getBody(), true);

        // Vous pouvez traiter les données ici et retourner les informations nécessaires
        return $data;
    }
}
