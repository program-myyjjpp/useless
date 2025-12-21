<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon-16x16.png') }}">
    <!-- Custom CSS -->
    <style type="text/css">
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /*background-color: #f7f7f7;*/
            height: 100%;
        }

        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
        }

        .error-content {
            background-color: #ffffff;
            padding: 40px;
            /*box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);*/
            border-radius: 8px;
            max-width: 600px;
            width: 100%;
        }

        .error-content img {
            width: 100%;
            max-width: 350px;
            margin-bottom: 30px;
        }

        .error-content h1 {
            font-size: 36px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .cta-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #6747c7;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #5435b0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .error-content {
                padding: 20px;
            }

            .error-content h1 {
                font-size: 28px;
            }

            .error-content p {
                font-size: 16px;
            }

            .cta-btn {
                font-size: 16px;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="error-content">
        <img src="{{ asset('/404.png') }}" alt="Page not found">
        <h1>糟糕！找不到您要查找的页面。</h1>
        <p>您要访问的页面似乎不存在。请检查 URL 或返回主页。</p>
        <a href="{{ url('/') }}" class="cta-btn">转至主页</a>
    </div>
</div>
</body>
</html>
