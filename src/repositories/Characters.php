<?php
namespace RickMorty\Repositories;
use RickMorty\Services\Api; 

class Characters
{

    protected $api;

    public function __construct()
    {
        $this->api = new Api();
    }

    public function getCharacters($page)
    {
        $result = null;
        try {
                $result = $this->api->getCharacters($page);

        } catch (\Exception $e) {
                $errorMsg = 'Error getting characters for page:' . $page;
                $result = ['error' => '$errorMsg'];
                //log error;
                //$e->getMessage();
        }

        return $result;
    }
}