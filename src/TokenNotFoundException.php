<?php

namespace Hollow3464\AzureOauthHelper;

use \Exception;

class TokenNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('No cached token found');
    }
}
