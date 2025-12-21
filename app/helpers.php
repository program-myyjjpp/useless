<?php


/**
 * 生成完整 URL
 * @param string $path
 * @return string
 */
if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $request = request();
        if ($request) {
            $scheme = $request->header('x-forwarded-proto', 'http');
            $host   = $request->host();
            return $scheme . '://' . $host . '/' . ltrim($path, '/');
        }
        return '/' . ltrim($path, '/');
    }
}


/**
 * 生成完整 URL
 * @param string $path 相对路径 (如 "about" 或 "/about")
 * @param array $params 查询参数
 * @return string
 */
if (!function_exists('url')) {
    function url(string $path = '', array $params = []): string
    {
        $request = request();
        if ($request) {
            $scheme = $request->header('x-forwarded-proto', 'http');
            $host   = $request->host();
            $base   = $scheme . '://' . $host . '/' . ltrim($path, '/');
        } else {
            $base   = '/' . ltrim($path, '/');
        }
        if (!empty($params)) {
            $base .= '?' . http_build_query($params);
        }
        return $base;
    }
}


/**
 * 阅读次数格式化
 */
if (!function_exists('format_view')) {
    function format_view(int $num): string
    {
        if ($num < 1000) {
            return (string)$num;
        }

        if ($num < 10000) {
            return round($num / 1000, 1) . 'K';
        }

        if ($num < 100000) {
            return round($num / 10000, 1) . 'W';
        }

        if ($num < 1000000) {
            return intval($num / 10000) . 'W';
        }

        return round($num / 10000, 1) . 'W';
    }
}