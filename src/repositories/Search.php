<?php
namespace RickMorty\Repositories;
use RickMorty\Services\Api; 

class Search
{
    private static $selfObj = null; 
    private static $page    = null; 

    protected $api;
    protected static $searchVars;

    public function __construct()
    {
        $this->api = new Api();
    }

    public static function initialise(?int $page, array $searchVars) {

        if( static::$selfObj === null )
        {
            static::$selfObj = new static;
        }

        static::$page       = $page;
        static::$searchVars = $searchVars;
        
        return static::$selfObj;
    }

    public function searchCharacters()
    {
        $result = null;
        try {
                $result = $this->api->searchCharacters(static::$page, static::$searchVars);

        } catch (\Exception $e) {
                $errorMsg = 'Error searching:' . static::$searchVars['searchString'];
                $result = ['error' => '$errorMsg'];
                //log error;
                //$e->getMessage();
        }

        return $result;
    }
}