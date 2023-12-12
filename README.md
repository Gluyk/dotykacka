# Dotypos API - PHP SDK
Dotypos SDK lets you integration in PHP easily!

## Usage
### Authorization
#### Get connect url
```php
$authorizationApi = new AuthorizationApi();
$connectUrl = new ConnectUrlVO(
    'clientId',
    'clientSecret',
    'https://bondus.cz'
);
$authorizationApi->getConnectUri($connectUrl)
```

#### Get access token
```php
$accessToken = new AccessTokenVO(
    'f43372b42ada75b9c073fa94b142bdc0',
    351052268
);
$authorizationApi->getAccessToken($accessToken);
```

