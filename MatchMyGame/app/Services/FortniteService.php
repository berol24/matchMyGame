<?php

use GuzzleHttp\Client;

class FortniteService
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.fortnitetracker.com/v1/profile/',
            'headers' => [
                'TRN-Api-Key' => 'd48298af-0c39-4ed9-af62-9901cc1da1ab', 
            ],
        ]);
    }

    public function getPlayerData($username)
    {
        $response = $this->httpClient->get('pc/' . $username);
        return json_decode($response->getBody());
    }

    public function getPlayerData($username)
    {
        $response = $this->httpClient->get('pc/' . $username);
        $data = json_decode($response->getBody(), true);

        $playerData = [
            'username' => $data['epicUserHandle'],
            'solo' => [
                'rank' => $data['stats']['p2']['trnRating']['rank'],
                'win_rate' => $data['stats']['p2']['top1']['value'] / $data['stats']['p2']['matches']['value'] * 100,
            ],
            'duo' => [
                'rank' => $data['stats']['p10']['trnRating']['rank'],
                'win_rate' => $data['stats']['p10']['top1']['value'] / $data['stats']['p10']['matches']['value'] * 100,
            ],
            'squad' => [
                'rank' => $data['stats']['p9']['trnRating']['rank'],
                'win_rate' => $data['stats']['p9']['top1']['value'] / $data['stats']['p9']['matches']['value'] * 100,
            ],
        ];

        return $playerData;
    }
}
