<?php

namespace JamBase;

use GuzzleHttp\Client;

class JamBase
{
    protected static $url = config('jam-base.url');

    protected static $api_key = config('jam-base.api_key');

    public function eventById($id)
    {
        $client = new Client();

        return $client->request('GET', self::$url, [
            'api_key' => self::$api_key,
            'id' => $id
        ]);
    }


}
