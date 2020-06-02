# CakephpTwilio plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require maymeow/cakephp-twilio
```

Open your `src/Application.php` file and load module

```php
//add into bootstrap function
$this->addPlugin('CakephpTwilio');
```

To load component add it to `src/AppController.php` for whole application or to any of your controllers by demand.

```php
$this->loadComponent('CakephpTwilio.Twilio');
```

## Configuration

This plugin using Twilio/SDK. To sending SMS, Twilio account is required. From your
number management in settings recieve your SID and TOKEN and add following lines to your
config file `config/app_local.php`:

```php
[
//... other configuration

    /**
     * Twilio SMS gate configuration
     */
    'Twilio' => [
        /**
         * From: use mobile phone number or string A-Za-z1-0 max length 11 characters
         * @see https://www.twilio.com/docs
         */
        'From' => '_NUMBER_OR_TEXT_',
        'Sid' => '_YOUR_SID_',
        'Token' => '_YOUR_TOKEN_'
    ],

// ... end of file
];
```

## How to use it

You can send message from any controller using Twilio component

```php
use CakephpTwilio\Model\Message;

$this->Twilio
    ->send(new Message('PhoneNumber', "Text"));
```

if you want change `from` variable

```php
$this->Twilio
    ->send(new Message('PhoneNumber', "Text", "NumberOrText"));
```
