<?php

namespace Jundayw\NotificationUmeng\Android;

use Jundayw\NotificationUmeng\AndroidNotification;

class AndroidGroupcast extends AndroidNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"]   = "groupcast";
        $this->data["filter"] = null;
    }
}
