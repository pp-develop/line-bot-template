# docker-line-bot-sample

## Setup
### LINE
Get Messaging API `CHANNEL_ACCESS_TOKEN / CHANNEL_SECRET` from [LINE Developers](
https://developers.line.biz/ja/docs/messaging-api/getting-started/)  
```
# .env
LINE_CHANNEL_ACCESS_TOKEN=""
LINE_CHANNEL_SECRET=""
```

### Webhook
Publish the server and set the Webhook from the LINE Messaging API

#### When using ngrok
1. access [ngrok Dashboard](https://dashboard.ngrok.com/get-started/your-authtoken) or [sign up for a free ngrok account](https://dashboard.ngrok.com/signup)  
    ```
    # .env
    NGROK_AUTH=""
    ```
2. Get the public URL from http://localhost:4040
3. [Set the webhook URL](https://developers.line.biz/ja/docs/messaging-api/building-bot/#setting-webhook-url)

## Usage
1. create and start containers
```
$ docker-compose up -d
```
2. composer install
```
$ docker exec -it line_bot_php bash
$ composer install
```
3. Send a message to LINE BOT
