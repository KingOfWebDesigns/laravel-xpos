<?php

namespace KingOfWebDesigns\LaravelXpos;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\carbon;

class LaravelXpos {

    private $apiKey;
    private $apiUrl;

    public function __construct()
    {
        $this->apiKey = env('XPOS_TEST_API_KEY');
        $this->apiUrl = env('XPOS_URL');
    }


    private function xposConnect($data, $query)
    {       
        $headers = [
            'Content-Type' => 'application/json',
            'AccessToken' => 'key',
            'Authorization' => $this->apiKey,
        ];

        // Create a new Guzzle client instance
        $client = new Client(
            [ 'headers' => $headers ]
        );

        // API endpoint URL with your desired location and units (e.g., London, Metric units)
        $apiUrl = $this->apiUrl."/".$data.$query;

        //dd($apiUrl);

        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            return $data;

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            //return view('weather', ['weatherData' => $data]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return $e->getMessage();
        }
    }

    public function brands(){

        $output = $this->xposConnect('brands', '');

        return $output;
    }

    public function groups(){

        $output = $this->xposConnect('groups', '');

        return $output;
    }

    public function customer($customerID){

        $query = '?customerid='.$customerID;

        $output = $this->xposConnect('customer', $query);

        return $output;
    }

    public function customers($pageNo, $dateTime){

        $queryPage = '?page=1&';
        $queryDate = '';       


        // Page No used for iteration through customers - number value required
        if($pageNo !== null && $pageNo !== ''){

            $queryPage = '?page='.$pageNo;

        }

        // Date to select customers before Last Adjusted Date
        if($dateTime !== null && $dateTime !== ''){
                

            // Need to check the datetime format here. 
            $dt = Carbon::create($dateTime);
            $dateTime = $dt->toDateTimeString();

            $queryDate = '&?date='.$dateTime;

        }

        $query = $queryPage.$queryDate;

        $output = $this->xposConnect('customers', $query);

        return $output;
    }

     public function inventory($pageNo){

        $queryPage = '?page=1&';
        
        // Page No used for iteration through customers - number value required
        if($pageNo !== null && $pageNo !== ''){

            $queryPage = '?page='.$pageNo;

        }

        $query = $queryPage;

        $output = $this->xposConnect('inventory', $query);

        return $output;
    }

    public function products($pageNo){

        $queryPage = '?page=1&';
        
        // Page No used for iteration through customers - number value required
        if($pageNo !== null && $pageNo !== ''){

            $queryPage = '?page='.$pageNo;

        }

        $query = $queryPage;

        $output = $this->xposConnect('products', $query);

        return $output;
    }

    public function sales($pageNo, $dateTime){

        $queryPage = '?page=1&';
        $queryDate = '';       


        // Page No used for iteration through customers - number value required
        if($pageNo !== null && $pageNo !== ''){

            $queryPage = '?page='.$pageNo;

        }

        // Date to select customers before Last Adjusted Date
        if($dateTime !== null && $dateTime !== ''){
                

            // Need to check the datetime format here. 
            $dt = Carbon::create($dateTime);
            $dateTime = $dt->toDateTimeString();

            $queryDate = '&?date='.$dateTime;

        }

        $query = $queryPage.$queryDate;

        $output = $this->xposConnect('sales', $query);

        return $output;
    }

    public function staff(){

        $output = $this->xposConnect('staff', '');

        return $output;
    }

    public function vatRates(){

        $output = $this->xposConnect('vatrates', '');

        return $output;
    }

}
