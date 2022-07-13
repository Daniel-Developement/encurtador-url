<?php

namespace App\Ulvis;

class UrlShorter
{
    private static function send($params = [])
    {
        $endpoint = 'https://ulvis.net/API/write/get?' . http_build_query($params);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return strlen($response) ? json_decode($response, true) : [];
    }

    public static function short($url)
    {
        $params = [
            'url' => $url,
        ];

        $response = self::send($params);

        return $response['data']['url'] ?? null;
    }
}