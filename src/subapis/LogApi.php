<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\LogApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class LogApi
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
     * Operation getAction
     *
     * Show action logs
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      string <b>$action_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;additional_info&#x60;   - &#x60;link_id&#x60;   - &#x60;contact_id&#x60;   - &#x60;email&#x60;   - &#x60;log_id&#x60;   - &#x60;track_id&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;time&#x60;   - &#x60;log_id&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ActionLogsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAction($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'workflow_id' => ['value' => null, 'isOptional' => false],
                        'action_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getActionLogsWithHttpInfo($allParams['workflow_id']['value'], $allParams['action_id']['value'], $allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation getCampaign
     *
     * Show campaign logs
     *
     *
     * @param mixed[] $params
     *                      int <b>$campaign_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;additional_info&#x60;   - &#x60;link_id&#x60;   - &#x60;contact_id&#x60;   - &#x60;email&#x60;   - &#x60;uniques&#x60;   - &#x60;log_id&#x60;   - &#x60;totals&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;time&#x60;   - &#x60;log_id&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CampaignLogsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCampaign($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'campaign_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCampaignLogsWithHttpInfo($allParams['campaign_id']['value'], $allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation getEmail
     *
     * Show transactional email logs
     *
     *
     * @param mixed[] $params
     *                      LogType <b>$log_type</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;group_id&#x60;   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\EmailLogsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEmail($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'log_type' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getEmailLogsWithHttpInfo($allParams['log_type']['value'], $allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value']));
    }

    /**
     * Operation getList
     *
     * Show list logs
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;additional_info&#x60;   - &#x60;contact_id&#x60;   - &#x60;email&#x60;   - &#x60;uniques&#x60;   - &#x60;track_id&#x60;   - &#x60;log_id&#x60;   - &#x60;start_id&#x60;   - &#x60;end_id&#x60;   - &#x60;totals&#x60;   - &#x60;type&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ListLogsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getList($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getListLogsWithHttpInfo($allParams['list_id']['value'], $allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value']));
    }
}
