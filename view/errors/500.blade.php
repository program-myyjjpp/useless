<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>500 Internal Server Erro</title>
    <style>
        :root{
            --fg:red;
            --bg:#000;
            --maxw: min(960px, 95vw);
            --fs: clamp(12px, 2.2vw, 18px);
        }
        *{box-sizing:border-box}
        html,body{height:100%}
        body{
            margin:0;
            background:var(--bg);
            color:var(--fg);
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            display:flex;
            align-items:center;
            justify-content:center;
            min-height:100vh;
            padding:24px;
            text-align:center;
        }
        .wrap{
            max-width:var(--maxw);
            width:100%;
        }
        h1{
            margin:0 0 16px;
            font-size: clamp(18px, 3.2vw, 28px);
            letter-spacing:.5px;
            color:var(--fg);
        }
        .ascii{
            display:inline-block;
            text-align:left;
            white-space:pre;
            font-size:var(--fs);
            line-height:1.1;
            max-width:100%;
            overflow:auto;
            padding:12px 16px;
            border:1px solid rgba(255,0,0,.35);
            border-radius:12px;
        }
    </style>
</head>
<body>
<div class="wrap" role="main" aria-labelledby="t">
    <pre class="ascii">
                .-"""-.
               / .===. \
               \/ 6 6 \/
               ( \___/ )
  _________ooo__\_____/_____________
 /                                  \
 |       I  AM  MYYJJPP ! ! !      |
 \_______________________ooo________/
                |  |  |
                |_ | _|
                |  |  |
                |__|__|
                /-   -\
               (__/ \__)
    </pre>
</div>
</body>
</html>