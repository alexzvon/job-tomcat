<?php
declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Client;

class LoadImageService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    //'GET'
    //'https://api.thecatapi.com/v1/images/search'
    //['limit' => 1, 'size' => 'full']
    //['x-api-key' => "DEMO-API-KEY"]
    public function getResponse(string $method, string $url, array $headers, array $query)
    {
        $response = $this->client->request($method, $url, ['query' => $query, 'headers' => $headers]);

        //dump($response);

        // dump($response->getReasonPhrase());
        // dump($response->getStatusCode());
        // dump($response->getBody());

        $body = $response->getBody()->getContents();
        $image = json_decode($body)[0];

        dump($image->url);
    }


    // axios.defaults.headers.common['x-api-key'] = "DEMO-API-KEY" // Replace this with your API Key

    //                 let response = await axios.get('https://api.thecatapi.com/v1/images/search', { params: { limit:1, size:"full" } } ) // Ask for 1 Image, at full resolution

    //                 this.image = response.data[0] // the response is an Array, so just use the first item as the Image

    //                 console.log("-- Image from TheCatAPI.com")
    //                 console.log("id:", this.image.id)
    //                 console.log("url:", this.image.url)



}
