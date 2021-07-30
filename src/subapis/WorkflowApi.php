<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\WorkflowApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class WorkflowApi
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
     * Operation activate
     *
     * Activate a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ActivateWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function activate($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->activateWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation create
     *
     * Create a workflow
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\Workflow <b>$workflow</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createWorkflowWithHttpInfo($allParams['workflow']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation deactivate
     *
     * Deactivate a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeactivateWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deactivate($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deactivateWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation get
     *
     * Show a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\GetWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation list
     *
     * Show all workflows
     *
     *
     * @param mixed[] $params
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;description&#x60;   - &#x60;goal&#x60;   - &#x60;status&#x60;   - &#x60;created_on&#x60;   - &#x60;updated_on&#x60;   - &#x60;activated_on&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ListWorkflowsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listWorkflowsWithHttpInfo($allParams['page']['value'], $allParams['per_page']['value'], $allParams['account_id']['value'], $allParams['with_count']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation lock
     *
     * Lock a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\LockWorkflow <b>$lock_workflow</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\LockWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function lock($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'lock_workflow' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->lockWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['lock_workflow']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation update
     *
     * Update a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\PatchWorkflow <b>$patch_workflow</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$lock_key</b> Locking key, preventing other users from modifying this workflow for a short period. (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'patch_workflow' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'lock_key' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['patch_workflow']['value'], $allParams['account_id']['value'], $allParams['lock_key']['value']));
    }

    /**
     * Operation unlock
     *
     * Unlock a workflow
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\UnlockWorkflow <b>$unlock_workflow</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\UnlockWorkflowResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function unlock($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'unlock_workflow' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->unlockWorkflowWithHttpInfo($allParams['workflow_id']['value'], $allParams['unlock_workflow']['value'], $allParams['account_id']['value']));
    }
}
