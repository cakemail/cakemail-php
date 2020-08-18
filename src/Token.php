<?php
namespace Cakemail;

use GuzzleHttp\Client;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\Api\TokenApi;

class Token
{
    public $accessToken;
    public $refreshToken;
    public $expirationTime;
    private $_tokenApi;

    public function __construct($username, $password)
    {
        $configuration = Configuration::getDefaultConfiguration();
        $this->_tokenApi =  new TokenApi(new Client(), $configuration);
        $token = $this->_tokenApi->createToken($username, $password, 'password');

        $this->accessToken = $token->getAccessToken();
        $this->refreshToken = $token->getRefreshToken();
        $this->expirationTime = time() + $token->getExpiresIn();
    }

    public function refresh()
    {
        $response = $this->_tokenApi->refreshToken('refresh_token', $this->refreshToken);

        $this->accessToken = $response->getAccessToken();
        $this->refreshToken = $response->getRefreshToken();
        $this->expirationTime = time() + $response->getExpiresIn();

        return $this->accessToken;
    }
}