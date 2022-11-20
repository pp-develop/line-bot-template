# docker-line-bot-template

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

## License

    Copyright 2016 LINE Corporation

    LINE Corporation licenses this file to you under the Apache License,
    version 2.0 (the "License"); you may not use this file except in compliance
    with the License. You may obtain a copy of the License at:

      https://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
    WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
    License for the specific language governing permissions and limitations
    under the License.
