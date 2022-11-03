<?php

namespace App\Enums;

enum FormType: string
{
    case GENERAL_REQUEST = 'general_request';
    case CALL_REQUEST = 'call_request';
}