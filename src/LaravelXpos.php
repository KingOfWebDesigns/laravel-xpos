<?php

namespace KingOfWebDesigns\LaravelXpos;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LaravelXpos {

	public function apiTest()
    {
        // Replace 'YOUR_API_KEY' with your OpenWeather API key
        $apiKey = env('XPOS_TEST_API_KEY');
        $apiUrl = env('XPOS_URL')

        $headers = [
            'Content-Type' => 'application/json',
            'AccessToken' => 'key',
            'Authorization' => $apiKey,
        ];
        
        // Create a new Guzzle client instance
        $client = new Client(
            [ 'headers' => $headers ]
        );

        // API endpoint URL with your desired location and units (e.g., London, Metric units)
        $apiUrl = $apiUrl."/products?page=1";

        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            dd($data);

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            //return view('weather', ['weatherData' => $data]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }

}
