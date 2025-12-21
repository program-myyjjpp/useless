<?php

namespace app\middleware;

use Webman\Http\Request;
use Webman\Http\Response;
use support\View;


class RouteNameMiddleware
{

    /**
     * @param Request $request
     * @param callable $next
     * @return Response
     */
    public function process(Request $request, callable $next): Response
    {
        $routeName = $request->route?->getName();
        View::assign('routeName', $routeName);
        return $next($request);
    }
}
