# Install

Install the `cakemail` package using `composer`

```bash
$ composer require cakemail/cakemail
```

# Usage

Create an object from the `Cakemail\Api` class with your Cakemail username and password.  The object will take care of
all authorization mechanisms automatically.

```php
$username = 'your@email.com';
$password = 'somepassword';

$api = new Api($username, $password);
```

Call one of the API operations (refer to the online documentation here)

```php
$myAcount = $api->account->getSelf();
```

# API operations

API operations accepts all the parameters in an array. You can use any parameter, in any order, but you must provide the required ones.

```php
$filteredCampaigns = $api->campaign->list([
        'with_count' => true,
        'filter'     => 'type==recurring;name==Newsletter'
]);
```

# Operation Examples

## Create a Sender
```php
use Cakemail\Lib\Model;

$sender = $api->sender->create([
   'create_sender' => new Model\CreateSender([
       'name'  => 'My Sender',
       'email' => 'someone@gmail.com'
   ])
]);

# look for the confirmation ID in your email inbox
$api->sender->confirm([
    'sender_id'      => $sender['id'],
    'confirm_sender' => new Model\ConfirmSender([
        'confirmation_id' => '[Confirmation ID]'
    ])
]);
```

## Create a Contact List

```php
use Cakemail\Lib\Model;

$myList = $api->list->create([
    'model_list' => new Model\ModelList([
        'name' => 'My new List',
        'default_sender' => new Model\Sender([
            'id' => $senderId
        ])
    ])
]);
```

## Send a transactional email

```php
use Cakemail\Lib\Model;

$myList = $api->transactional_email->send([
    'email' => new Model\Email([
        'email'   => 'destination@gmail.com',
        'sender'  => $sender,
        'content' => new Model\EmailContent([
            'subject'  => 'Subject line',
            'html'     => 'Email body',
            'encoding' => 'utf-8'
        ])
    ])
]);
```

## Accessing data

The CakemailAPI always return its data under the 'data' key. For simplicity, the resource data is accessible from the returned response directly:

```php
$myUser = $api->user->getSelf();

print_r($myUser['email']);
```
## Iterate through lists

Some methods return a list of resources on which you can iterate directly:

```php
$campaigns = $api->campaign->list();

foreach ($campaigns as $campaign) {
    $html = $api->campaign->render([
        'campaign_id' => $campaign['id']
    ])['html'];

    print_r("id: {$campaign['id']}, name: {$campaign['name']}, html: {$html}");
}

```

## Pagination

Pagination is stored in the 'pagination' key of all methods returning a list of resources:

```php
$campaigns = $api->campaign->list(['with_count' => 'true']);
print_r(" 
          page:     " . $campaigns['pagination']['page'] . ",
          per_page: " . $campaigns['pagination']['per_page'] . ",
          count:    " . $campaigns['pagination']['count'] . "
          ");
```
