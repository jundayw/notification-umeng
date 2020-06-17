<?php

namespace Jundayw\NotificationUmeng\IOS;

use Jundayw\NotificationUmeng\IOSNotification;

class IOSListcast extends IOSNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"]          = "listcast";
        $this->data["device_tokens"] = null;
    }
}
