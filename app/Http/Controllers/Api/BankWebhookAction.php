<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankWebhookAction extends Controller
{
    public function __invoke()
    {
        return 'ok';
    }
}
