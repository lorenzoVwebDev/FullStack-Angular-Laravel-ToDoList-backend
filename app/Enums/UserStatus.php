<?php

namespace App\Enums;

enum UserStatus: string
{
    case START = "START";
    case MAIL_SENT = "MAIL_SENT";
    case VERIFIED = "VERIFIED";
    case UNACTIVE = "UNACTIVE";
    case BLOCKED = "BLOCKED";
}
