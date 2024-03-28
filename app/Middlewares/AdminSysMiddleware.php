<?php
namespace Middlewares;
use Src\Auth\Auth;
use Src\Request;
class AdminSysMiddleware
{
    public function handle(Request $request)
    {
        if (!Auth::adminCheck()) {
            app()->route->redirect('/hello');
        }
    }
}