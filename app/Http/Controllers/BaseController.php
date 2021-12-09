<?php

namespace App\Http\Controllers;

use App\Traits\FlashMessages;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use FlashMessages;

    protected $data = null;

    protected function setPageTitle($title, $subTitle)
    {
        \view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
    }

    protected function showErrorPage($errorCode = 404, $message = null)
    {
        $data['message'] = $message;
        return \response()->view('errors.'.$errorCode, $data, $errorCode);
    }

    protected function responseRedirect($route, $message, $type = 'info', $error = false, $withOldInputWhenError = false)
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessage();

        if ($error && $withOldInputWhenError) {
            return \redirect()->back()->withInput();
        } else {
            return \redirect()->route($route);
        }
    }

    protected function responseRedirectBack($message, $type = 'info', $error = false, $withOldInputWhenError = \false)
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->back();
    }
}