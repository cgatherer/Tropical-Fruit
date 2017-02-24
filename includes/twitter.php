<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "36517909-YFwRQWD0wfLSBKE3x4pBDQ6nblK3ASAJsQfVSSXIa",
    'oauth_access_token_secret' => "a536mzNVakjtqUMZ7jOI5wb80QCsjR5eUoENHaxQox0qa",
    'consumer_key' => "I4LdHhbCCOals00nZhvJEXYNb",
    'consumer_secret' => "hPhNwX9N4Nnj4Zq3trDeK9eeZv3JnvLuqUD9lg3rMT6I3PWaDg"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'GET';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'ititropicals',
    'skip_status' => '1'
);

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?q=@ititropicals&count=20';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();

$parsed = json_decode($response,true);
$parsed = $parsed;
//
?>

<?php
foreach($parsed as $key => $value){

      if(!isset($value['retweeted_status'])){
            $profileimg = $value['user']['profile_image_url'];
            $profilename = $value['user']['name'];
            $screenname = $value['user']['screen_name'];
            $tweet = $value['text'];
      }else{
            $profileimg = $value['retweeted_status']['user']['profile_image_url'];
            $profilename = $value['retweeted_status']['user']['name'];
            $screenname = $value['retweeted_status']['user']['screen_name'];
            $tweet = $value['retweeted_status']['text'];
      }
      echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 apost twitter" style="height:300px;overflow: hidden;margin: 0 0 20px 0;">';
                  echo '<blockquote class="twitter-tweet" lang="en"><p lang="und" dir="ltr"><p><a href="'.$tweet.'">'.$tweet.'</a></p>&mdash; '.$profilename.' (@'.$screenname.') <a href="https://twitter.com/iTiTropicals/status/'.$value['id'].'"></a></blockquote>';
      echo '</div>';
}?>