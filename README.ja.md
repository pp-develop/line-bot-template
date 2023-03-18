# line-bot-template

## Setup
### LINE
1. [LINE Developers](
https://developers.line.biz/en/docs/messaging-api/getting-started/) から、Messaging APIの`CHANNEL_ACCESS_TOKEN / CHANNEL_SECRET`を取得してください。
2. /src/index.phpの下記の値を、先ほど取得した値に置き換えます。
    ```
    # /src/index.php
    $channelAccessToken = '<your channel access token>';
    $channelSecret = '<your channel secret>';
    ```

### Webhook
サーバーを公開し、LINE Messaging APIのWebhook URLを設定してください。

#### ngrokを使用する場合
1. AUTH_TOKENを取得するため、ngrokの[Dashboard](https://dashboard.ngrok.com/get-started/your-authtoken)にアクセスするか、アカウントがない場合は[アカウントを作成
](https://dashboard.ngrok.com/signup)してください。
2. docker-compose.ymlのNGROK_AUTHの値を、先程取得した値に置き換えます。
    ```
    # docker-compose.yml
    NGROK_AUTH: AUTH_TOKEN
    ```
3. http://localhost:4040 から開発環境の公開URLを取得してください。
4. [Webhook URLを設定してください](https://developers.line.biz/ja/docs/messaging-api/building-bot/#setting-webhook-url)

## Usage
1. コンテナを作成して起動してください。
```
$ docker-compose up -d
```
2. LINE BOTにメッセージを送信してください。

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
