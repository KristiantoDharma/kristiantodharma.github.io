<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_curl($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }

    public function home()
    {
        $head = $this->get_curl('https://newsapi.org/v2/everything?q=stock&apiKey=689366807ee9409a8bb1b93949bc5eb9');
        $headNews = $head['articles'];

        $late = $this->get_curl('https://newsapi.org/v2/everything?q=tech&apiKey=689366807ee9409a8bb1b93949bc5eb9');
        $latestNews = $late['articles'];

        $popular = $this->get_curl('https://newsapi.org/v2/everything?q=health&apiKey=689366807ee9409a8bb1b93949bc5eb9');
        $popularNews = $popular['articles'][0];

        return view('/Home/index', [
            'title' => 'Spirit | Home',
            'head' => $headNews,
            'latest' => $latestNews,
            'popular' => $popularNews,
        ]);
    }
}
