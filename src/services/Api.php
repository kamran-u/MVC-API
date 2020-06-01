<?php
namespace RickMorty\Services;

use GuzzleHttp\Client;
use Config;

class Api 
{
    protected $apiUrl;

    public function __construct()
    {
        $this->rickMortyApiUrl = Config::RICK_MORTY_API_URL;
    }

    protected function httpClient($action, $uri, $loginRequired=false, $json=null, $headers=null, $params=null)
    {
        $client = new Client(['base_uri' => $this->rickMortyApiUrl]);
        $options = [
             'content-type'  => 'application/json',
             'cache-control' => 'no-cache',
            // 'auth'        => []
        ];

        return $client->request($action, $uri);
    }


    public function getCharacters(?int $page) 
    {
        $uri  = 'character/?page=';
        $uri .= $page ?: '';    

        return json_decode($this->httpClient('GET', $uri)->getBody()->getContents(), true);
    }


    public function searchCharacters(?int $page, array $searchVars) 
    {
        $uri  = "character/?{$searchVars['characterAttributes']}={$searchVars['searchString']}&page=";
        $uri .= $page ?: '';

        return json_decode($this->httpClient('GET', $uri)->getBody()->getContents(), true);
    } 
}