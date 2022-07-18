<?php
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/app/include.php');

use LINE\LINEBot;
use LINE\LINEBot\Constant\HTTPHeader;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$http_client = new CurlHTTPClient(Env::getValue('LINE_CHANNEL_ACCESS_TOKEN'));
$bot = new LINEBot($http_client, ['channelSecret' => Env::getValue('LINE_CHANNEL_SECRET')]);
$signature = $_SERVER["HTTP_" . HTTPHeader::LINE_SIGNATURE];
$events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);

foreach ($events as $event) {
    $response = $bot->replyMessage(
        $event->getReplyToken(),
        new TextMessageBuilder($event->getText())
    );
}
