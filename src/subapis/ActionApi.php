<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\ActionApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class ActionApi
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
     * Create an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\Action <b>$action</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'action' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createActionWithHttpInfo($allParams['workflow_id']['value'], $allParams['action']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$action_id</b> (required)<br>
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteActionWithHttpInfo($allParams['action_id']['value'], $allParams['workflow_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Get an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      string <b>$action_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\GetActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getActionWithHttpInfo($allParams['workflow_id']['value'], $allParams['action_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation listActionLinks
     *
     * Show action links
     *
     *
     * @param mixed[] $params
     *                      string <b>$action_id</b> (required)<br>
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\LinksResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listActionLinks($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listActionLinksWithHttpInfo($allParams['action_id']['value'], $allParams['workflow_id']['value'], $allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value']));
    }

    /**
     * Operation list
     *
     * List actions
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;created_on&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ActionsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listActionsWithHttpInfo($allParams['workflow_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['account_id']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation update
     *
     * Update an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$action_id</b> (required)<br>
     *                      string <b>$workflow_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\PatchAction <b>$patch_action</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'patch_action' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchActionWithHttpInfo($allParams['action_id']['value'], $allParams['workflow_id']['value'], $allParams['patch_action']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation render
     *
     * Render an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      string <b>$action_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\RenderActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function render($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->renderActionWithHttpInfo($allParams['workflow_id']['value'], $allParams['action_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation sendTest
     *
     * Send a test of an action
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      string <b>$action_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\SendTestAction <b>$send_test_action</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\SendTestActionResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendTest($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'send_test_action' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->sendTestActionWithHttpInfo($allParams['workflow_id']['value'], $allParams['action_id']['value'], $allParams['send_test_action']['value'], $allParams['account_id']['value']));
    }
}
