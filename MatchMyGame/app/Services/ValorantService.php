<?php

namespace App\Services;

use GuzzleHttp\Client;

class ValorantService
{
    protected $httpClient;
    protected $apiKey;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.valorantapi.com/v1/',
        ]);
        $this->apiKey = 'RGAPI-645ced82-4fe8-4b63-b5ef-b5c15aee2941'; 
    }

    public function getPlayerData($username)
    {
        $headers = [
            'X-Riot-Token' => $this->apiKey,
        ];

        $response = $this->httpClient->get('players?name=' . $username, ['headers' => $headers]);
        $data = json_decode($response->getBody(), true);

        public function getPlayerData($username)
        {
            $response = $this->httpClient->get('v1/players?name=' . $username);
            $data = json_decode($response->getBody(), true);
    
            $playerData = [
                'username' => $data['data'][0]['attributes']['name'],
                'rank' => $data['data'][0]['attributes']['tier'],
                'kd_ratio' => $data['data'][0]['attributes']['stats']['kd']['value'],
                'hs_percentage' => $data['data'][0]['attributes']['stats']['headshotsPercentage']['value'],
                'win_rate' => $data['data'][0]['attributes']['stats']['winPercentage']['value'],
                'last_5_matches' => $data['data'][0]['attributes']['matches']['matches'] ?? [],
            ];
    
            return $playerData;
        }
        return $data;
    }
}
