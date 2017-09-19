<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '179dab49e9373838009df61ae1684de5';
$access_token  = '/jlPwu9B9zHK3uZu+NlIRAoTqhYISpzevh1qeAVyqNKDVpM5X7+GtW3aK1gdB6k96Fkd14LElyqGZ2y1Ln59AY2/F6+0jVtmsIyUFArhRmB7ui1WcYNAEDNYwslg4UvDVxz/fhKLSxZFOmLah1gaTAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
