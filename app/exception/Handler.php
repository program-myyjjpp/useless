<?php

namespace app\exception;

use Throwable;
use Webman\Http\Request;
use Webman\Http\Response;

class Handler extends \support\exception\Handler
{
    /**
     * 渲染返回
     * @param Request $request
     * @param Throwable $exception
     * @return Response
     */
    public function render(Request $request, Throwable $exception) : Response
    {
        $code = $exception->getCode();
        if ($request->expectsJson()) {
            return json(['code' => $code ? $code : 500, 'msg' => $exception->getMessage()]);
        }
        return view('/view/errors/500', ['exception' => $exception])->withStatus(500);
    }
}