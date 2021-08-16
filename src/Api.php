<?php
namespace Cakemail;

use Cakemail\Lib\Configuration;
use GuzzleHttp\Client;

use Cakemail\Subapis\AccountApi;
use Cakemail\Subapis\ActionApi;
use Cakemail\Subapis\CampaignApi;
use Cakemail\Subapis\CampaignBlueprintApi;
use Cakemail\Subapis\ContactApi;
use Cakemail\Subapis\CustomAttributeApi;
use Cakemail\Subapis\DomainApi;
use Cakemail\Subapis\FormApi;
use Cakemail\Subapis\LinksApi;
use Cakemail\Subapis\ListApi;
use Cakemail\Subapis\LogApi;
use Cakemail\Subapis\LogoApi;
use Cakemail\Subapis\ReportApi;
use Cakemail\Subapis\SegmentApi;
use Cakemail\Subapis\SenderApi;
use Cakemail\Subapis\SubAccountApi;
use Cakemail\Subapis\SuppressedEmailApi;
use Cakemail\Subapis\SystemEmailApi;
use Cakemail\Subapis\TemplateApi;
use Cakemail\Subapis\TokenApi;
use Cakemail\Subapis\TransactionalEmailApi;
use Cakemail\Subapis\UserApi;
use Cakemail\Subapis\WebhookApi;
use Cakemail\Subapis\WorkflowApi;
use Cakemail\Subapis\WorkflowBlueprintApi;

class Api
{

    private $config;
    private $tokenObj;

    public $account;
    public $action;
    public $campaign;
    public $campaign_blueprint;
    public $contact;
    public $custom_attribute;
    public $domain;
    public $form;
    public $links;
    public $list;
    public $log;
    public $logo;
    public $report;
    public $segment;
    public $sender;
    public $sub_account;
    public $suppressed_email;
    public $system_email;
    public $template;
    public $token;
    public $transactional_email;
    public $user;
    public $webhook;
    public $workflow;
    public $workflow_blueprint;

    public function __construct($username, $password)
    {
        $this->config = Configuration::getDefaultConfiguration();

        $this->tokenObj = new Token($username, $password);
        $this->config->setAccessToken($this->tokenObj->accessToken);

        $this->account = new AccountApi(new Client(), $this->config);
        $this->action = new ActionApi(new Client(), $this->config);
        $this->campaign = new CampaignApi(new Client(), $this->config);
        $this->campaign_blueprint = new CampaignBlueprintApi(new Client(), $this->config);
        $this->contact = new ContactApi(new Client(), $this->config);
        $this->custom_attribute = new CustomAttributeApi(new Client(), $this->config);
        $this->domain = new DomainApi(new Client(), $this->config);
        $this->form = new FormApi(new Client(), $this->config);
        $this->links = new LinksApi(new Client(), $this->config);
        $this->list = new ListApi(new Client(), $this->config);
        $this->log = new LogApi(new Client(), $this->config);
        $this->logo = new LogoApi(new Client(), $this->config);
        $this->report = new ReportApi(new Client(), $this->config);
        $this->segment = new SegmentApi(new Client(), $this->config);
        $this->sender = new SenderApi(new Client(), $this->config);
        $this->sub_account = new SubAccountApi(new Client(), $this->config);
        $this->suppressed_email = new SuppressedEmailApi(new Client(), $this->config);
        $this->system_email = new SystemEmailApi(new Client(), $this->config);
        $this->template = new TemplateApi(new Client(), $this->config);
        $this->token = new TokenApi(new Client(), $this->config);
        $this->transactional_email = new TransactionalEmailApi(new Client(), $this->config);
        $this->user = new UserApi(new Client(), $this->config);
        $this->webhook = new WebhookApi(new Client(), $this->config);
        $this->workflow = new WorkflowApi(new Client(), $this->config);
        $this->workflow_blueprint = new WorkflowBlueprintApi(new Client(), $this->config);
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            // check if token expired and refresh it
            if ($this->tokenObj->expirationTime < time()) {
                $this->config->setAccessToken($this->tokenObj->refresh());
            }

            return $this->$name;
        }
        return false;
    }
}