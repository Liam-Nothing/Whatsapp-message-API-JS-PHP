# Whatsapp-message-API-JS-PHP

A whatsapp api to send message.
Using Whatsapp web, JavaScript and PHP.

## Requirement

Install [Greasemonkey](https://www.greasespot.net/) on your web browser (or any javascript injector).
Go on [web.whatsapp.com](https://web.whatsapp.com/) and login to your accounct.

## Setup API

- Create `config.json` in `includes` directory who contain :
```json
{
    "host" : "XXXXXXX",
    "dbusername" : "XXXXXXX",
    "dbpassword" : "XXXXXXX"
}
```
- Change in `functs_db.php` by your identifiants (local) :
```php
$config = [
    "host" => "localhost",
    "dbusername" => "root",
    "dbpassword" => ""
];
```
- Change in `index.php` by your database name :
```php
$database = connectDB("nothingefdglobal", $config);
```
- Change in `script.js` the location of your API :
```js
let url = "http://localhost/Whatsapp-message-API-JS-PHP/";
```
- Install the database `nothingefdglobal.sql`.

## Setup Web

Go on [web.whatsapp.com](https://web.whatsapp.com/) and login to your accounct.
Import `Greasemonkey_Whatsapp.zip` to your [Greasemonkey](https://www.greasespot.net/).
Verify is the script is correctly enable.
Reload the web page.

## How to use API

You can use POST or GET request to API.

- GET
```
http://localhost/Whatsapp-message-API-JS-PHP/?api=app_whtsp_update_content&
pass=[PASSWORD]&
message=[MESSAGE]&
reciver=[PHONE OF RECIVER]
```

- POST
```json
{
    "api":"app_whtsp_update_content",
    "pass":"[PASSWORD]",
    "message":"[MESSAGE]",
    "reciver":"[PHONE OF RECIVER]"
}
```