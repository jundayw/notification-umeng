<?php

namespace Jundayw\NotificationUmeng\IOS;

use Jundayw\NotificationUmeng\IOSNotification;

class IOSGroupcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"]   = "groupcast";
        $this->data["filter"] = null;
    }
}