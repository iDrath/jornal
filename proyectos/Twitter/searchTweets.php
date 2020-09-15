<?php

showTweets("GeekyTheory",5);

function getJsonTweets($query,$num_tweets){
        ini_set('display_errors', 1);
        require_once('TwitterAPIExchange.php');

        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "Eh17qltS0gxhtiUMyxa3f4Qiy",
            'oauth_access_token_secret' => "amXBClpm7eIUAJcAL3asI62evBqv3vqDuwE9QgUzA8PBmnO59o",
            'consumer_key' => "360094130-Ly49gpggNak3TP6TEF5nkket7njTHSRKNDVFqWfh",
            'consumer_secret' => "0zuncxvnHaIOOsmBhwJuQNYDPKG365bgF8XYcKCIiWzIS"
        );

        if($num_tweets>100) $num_tweets = 100;

        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q='.$query.'&count='.$num_tweets;

        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $json =  $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        return $json;
}
