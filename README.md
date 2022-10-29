# docker-line-bot-sample

## Setup
### LINE
Get Messaging API `CHANNEL_ACCESS_TOKEN / CHANNEL_SECRET` from [LINE Developers](
https://developers.line.biz/en/docs/messaging-api/getting-started/)  
```
# /src/index.php
$channelAccessToken = '<your channel access token>';
$channelSecret = '<your channel secret>';
```

### Webhook
Publish the server and set a WebhookURL for the LINE Messaging API

#### When using ngrok
1. access [ngrok Dashboard](https://dashboard.ngrok.com/get-started/your-authtoken) or [sign up for a free ngrok account](https://dashboard.ngrok.com/signup)  
    ```
    # docker-compose.yml
    NGROK_AUTH: AUTH_TOKEN
    ```
2. Get public URL from http://localhost:4040
3. [Set a webhook URL](https://developers.line.biz/en/docs/messaging-api/building-bot/#setting-webhook-url)

## Usage
1. create and start containers
```
$ docker-compose up -d
```
2. Send a message to LINE BOT
