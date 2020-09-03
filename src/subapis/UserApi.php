<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\UserApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class UserApi
{

    private $openApiObj;

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->openApiObj = new OpenAPI($client, $config, $selector);
    }

    private function fillParams($params, $allParams)
    {
        // fill in the provided values
        foreach ($params as $param => $value) {
            if (array_key_exists($param, $allParams)) {
                $allParams[$param]['value'] = $value;
            } else {
                // throw exception, parameter not found
                throw new ApiException('"' . $param . '" is not a valid parameter');
            }
        }

        return $allParams;
    }


    /**
     * Operation create
     *
     * Create a user
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\User <b>$user</b> user (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\CreateUserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createUser($allParams['user']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a user
     *
     *
     * @param mixed[] $params
     *                      int <b>$user_id</b> user_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\DeleteUserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteUser($allParams['user_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation forgotMyPassword
     *
     * Forgot my password
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\ForgotMyPassword <b>$forgot_my_password</b> forgot_my_password (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\ResetPasswordResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function forgotMyPassword($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'forgot_my_password' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->forgotMyPassword($allParams['forgot_my_password']['value']));
    }

    /**
     * Operation getSelf
     *
     * Show my user details
     *
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\UserResponse|\Cakemail\Lib\Model\HTTPBadRequestError
     */
    public function getSelf()
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        return new Response($this->openApiObj->getSelfUser());
    }

    /**
     * Operation get
     *
     * Show a user details
     *
     *
     * @param mixed[] $params
     *                      int <b>$user_id</b> user_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\UserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getUser($allParams['user_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all users in my account
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (optional)<br>
     *                      int <b>$page</b> page (optional, default to 1)<br>
     *                      int <b>$per_page</b> per_page (optional, default to 50)<br>
     *                      bool <b>$with_count</b> with_count (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\UsersResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function list($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listUsers($allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value']));
    }

    /**
     * Operation update
     *
     * Update a user
     *
     *
     * @param mixed[] $params
     *                      int <b>$user_id</b> user_id (required)<br>
     *                      \Cakemail\Lib\Model\PatchUser <b>$patch_user</b> patch_user (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\PatchUserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user_id' => ['value' => null, 'isOptional' => false],
                        'patch_user' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchUser($allParams['user_id']['value'], $allParams['patch_user']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation resetPasswordConfirm
     *
     * Reset password confirmation
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\ResetPasswordConfirm <b>$reset_password_confirm</b> reset_password_confirm (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\ResetPasswordConfirmResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function resetPasswordConfirm($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'reset_password_confirm' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->resetPasswordConfirm($allParams['reset_password_confirm']['value']));
    }

    /**
     * Operation resetSelfPassword
     *
     * Reset my password
     *
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\ResetPasswordResponse|\Cakemail\Lib\Model\HTTPBadRequestError
     */
    public function resetSelfPassword()
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        return new Response($this->openApiObj->resetSelfPassword());
    }

    /**
     * Operation suspend
     *
     * Suspend a user
     *
     *
     * @param mixed[] $params
     *                      int <b>$user_id</b> user_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\SuspendUserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function suspend($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->suspendUser($allParams['user_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation unsuspend
     *
     * Unsuspend a user
     *
     *
     * @param mixed[] $params
     *                      int <b>$user_id</b> user_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\SuspendUserResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function unsuspend($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'user_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->unsuspendUser($allParams['user_id']['value'], $allParams['account_id']['value']));
    }
}
