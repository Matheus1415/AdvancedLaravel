<?php

namespace App\Library;

use Google\Client;
use Google\Service\Oauth2 as ServiceOauth2;
use Google\Service\Oauth2\Userinfo;

class GoogleClient
{
    private Userinfo $data;
    public readonly Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function init()
    {
        $guzzleClient = new \GuzzleHttp\Client(['curl' => [CURLOPT_SSL_VERIFYPEER => false]]);
        $this->client->setHttpClient($guzzleClient);
        $this->client->setClientId(env('GOOGLE_CLIENT_ID'));
        $this->client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $this->client->setRedirectUri('http://127.0.0.1:8000/login');
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function authenticated()
    {
        if (request()->has('code')) {
            $token = $this->client->fetchAccessTokenWithAuthCode(request('code'));

            if (isset($token['access_token'])) {
                $this->client->setAccessToken($token['access_token']);
                $googleService = new ServiceOauth2($this->client);
                $this->data = $googleService->userinfo->get();
                return true;
            }
        }

        return false;
    }

    public function getData()
    {
        return $this->data;
    }

    public function generateLink()
    {
        return $this->client->createAuthUrl();
    }
}
