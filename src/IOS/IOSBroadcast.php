<?php

namespace Jundayw\NotificationUmeng\IOS;

use Jundayw\NotificationUmeng\IOSNotification;

class IOSBroadcast extends IOSNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}
