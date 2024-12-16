<?php

namespace App\Helpers;

class marchand
{
    private $apikey;
    private $site_id;
    private $secret_key;

    // Constructeur pour initialiser les propriétés de la classe
    public function __construct($apikey, $site_id, $secret_key)
    {
        $this->apikey = $apikey;
        $this->site_id = $site_id;
        $this->secret_key = $secret_key;
    }

    // Méthodes pour accéder aux propriétés de la classe
    public function getApiKey()
    {
        return $this->apikey;
    }

    public function getSiteId()
    {
        return $this->site_id;
    }

    public function getSecretKey()
    {
        return $this->secret_key;
    }


}


