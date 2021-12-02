<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $graphQLquery = '{"query": " query{
        users{
          data{
            id
            email
          }
        }
      } "}';

     
    $response = (new Client)->request('post', 'http://127.0.0.1:8000/graphql', [
        'headers' => [
         'Content-Type' => 'application/json'
        ],
        'body' => $graphQLquery
    ]);
    dd($response);
 });
