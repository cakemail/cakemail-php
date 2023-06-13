<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\ReportApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class ReportApi
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
     * Operation createCampaignsReportsExport
     *
     * Create a campaigns reports export
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\CreateCampaignReportExport <b>$create_campaign_report_export</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateCampaignsReportsExportResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCampaignsReportsExport($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'create_campaign_report_export' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createCampaignsReportsExportWithHttpInfo($allParams['create_campaign_report_export']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation deleteCampaignsReportsExport
     *
     * Delete a campaigns report export
     *
     *
     * @param mixed[] $params
     *                      string <b>$export_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteCampaignsReportsExportResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCampaignsReportsExport($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'export_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteCampaignsReportsExportWithHttpInfo($allParams['export_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation downloadCampaignsReportsExport
     *
     * Download a campaigns reports export
     *
     *
     * @param mixed[] $params
     *                      string <b>$export_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DownloadCampaignsReportsExportResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadCampaignsReportsExport($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'export_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->downloadCampaignsReportsExportWithHttpInfo($allParams['export_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getAccount
     *
     * Show account report
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> (required)<br>
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\AccountStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccount($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getAccountStatsWithHttpInfo($allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value']));
    }

    /**
     * Operation getAction
     *
     * Show action report
     *
     *
     * @param mixed[] $params
     *                      string <b>$workflow_id</b> (required)<br>
     *                      string <b>$action_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ActionStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
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
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getActionStatsWithHttpInfo($allParams['workflow_id']['value'], $allParams['action_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getCampaignLink
     *
     * Show campaign links report
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
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;unique&#x60;   - &#x60;total&#x60;   - &#x60;link&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CampaignLinksStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCampaignLink($params)
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
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCampaignLinksStatsWithHttpInfo($allParams['campaign_id']['value'], $allParams['account_id']['value'], $allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation getCampaign
     *
     * Show campaign report
     *
     *
     * @param mixed[] $params
     *                      int <b>$campaign_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CampaignStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCampaign($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'campaign_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCampaignStatsWithHttpInfo($allParams['campaign_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getCampaignsReportsExport
     *
     * Get a campaigns reports export
     *
     *
     * @param mixed[] $params
     *                      string <b>$export_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\GetCampaignsReportsExportResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCampaignsReportsExport($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'export_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCampaignsReportsExportWithHttpInfo($allParams['export_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getEmail
     *
     * Show transactional email report
     *
     *
     * @param mixed[] $params
     *                      int <b>$start_time</b> (required)<br>
     *                      int <b>$end_time</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\EmailStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEmail($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'start_time' => ['value' => null, 'isOptional' => false],
                        'end_time' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getEmailsStatsWithHttpInfo($allParams['start_time']['value'], $allParams['end_time']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getList
     *
     * Show list report
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ListStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getList($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getListStatsWithHttpInfo($allParams['list_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation getSelfAccount
     *
     * Show my account report
     *
     *
     * @param mixed[] $params
     *                      int <b>$start_time</b> (optional)<br>
     *                      int <b>$end_time</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\AccountStatsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSelfAccount($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'start_time' => ['value' => null, 'isOptional' => true],
                        'end_time' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getSelfAccountStatsWithHttpInfo($allParams['start_time']['value'], $allParams['end_time']['value']));
    }

    /**
     * Operation listCampaignsReportsExports
     *
     * List campaigns reports exports
     *
     *
     * @param mixed[] $params
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;status&#x60;   - &#x60;progress&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ListCampaignsReportsExportsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCampaignsReportsExports($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listCampaignsReportsExportsWithHttpInfo($allParams['page']['value'], $allParams['per_page']['value'], $allParams['account_id']['value'], $allParams['filter']['value']));
    }
}
