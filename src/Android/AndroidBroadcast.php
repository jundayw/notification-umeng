<?php

namespace Jundayw\NotificationUmeng\Android;

use Jundayw\NotificationUmeng\AndroidNotification;

class AndroidBroadcast extends AndroidNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}
