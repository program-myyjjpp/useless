<?php

namespace app\middleware;

use Webman\Http\Request;
use Webman\Http\Response;
use Webman\MiddlewareInterface;


class VerifyAPIToken implements MiddlewareInterface
{

    /**
     * @param Request $request
     * @param callable $handler
     * @return Response
     */
    public function process(Request $request, callable $handler): Response
    {
        $authHeader = $request->header('authorization');
        $token = null;
        if ($authHeader && preg_match('/Bearer\s+(\S+)/i', $authHeader, $matches)) {
            $token = $matches[1];
        }
        $validToken = env('API_TOKEN');
        if (!$token || $token !== $validToken) {
            return json([
                'error' => 'Invalid access token', ],
                401); }
        return $handler($request);
    }
}