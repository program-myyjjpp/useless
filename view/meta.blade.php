<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    @if($routeName === 'home')
        <title>{!! $information->title !!}</title>
        <meta name="keywords" content="{!! $information->keywords !!}">
        <meta name="description" content="{!! $information->description !!}">
        <meta property="og:title" content="{!! $information->title !!}" />
        <meta property="og:keywords" content="{!! $information->keywords !!}" />
        <meta property="og:description" content="{!! $information->description !!}" />
        <meta property="og:image" content="{{ asset($information->logo) }}" />
        <meta property="og:image:secure_url" content="{{ asset($information->logo) }}" />
        <script type="application/ld+json">
            @php
                echo json_encode([
                  "@context" => "https://schema.org",
                  "@type" => "WebSite",
                  "@id" => url('/') . "#website",
                  "name" => html_entity_decode($information->title, ENT_QUOTES, 'UTF-8'),
                  "url" => url('/'),
                  "description" => html_entity_decode($information->description, ENT_QUOTES, 'UTF-8'),
                  "keywords" => html_entity_decode($information->keywords, ENT_QUOTES, 'UTF-8'),
                  "inLanguage" => "zh-CN",
                  "publisher" => [
                    "@type" => "Organization",
                    "name" => html_entity_decode($information->title, ENT_QUOTES, 'UTF-8'),
                    "logo" => [
                      "@type" => "ImageObject",
                      "url" => asset($information->logo)
                        ],
                    ],
                  "potentialAction" => [
                    "@type" => "SearchAction",
                    "target" => url('/') . "search?q={search_term_string}",
                    "query-input" => "required name=search_term_string"
                  ],
                ], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
            @endphp
        </script>
    @elseif($routeName === 'article')
        <title>{{ $article->title }} | {!! $information->title !!}</title>
        <meta name="keywords" content="{{ $article->title }}">
        <meta name="description" content="{{ $article->description }}">
        <meta property="og:title" content="{!! $information->title !!}" />
        <meta property="og:keywords" content="{{ $article->title }}" />
        <meta property="og:description" content="{{ $article->description }}" />
        <meta property="og:image" content="{{ asset($article->image) }}" />
        <meta property="og:image:secure_url" content="{{ asset($article->image) }}" />
        <meta property="article:published_time" content="{{ $article->datetime }}">
        <script type="application/ld+json">
            @php
                echo json_encode([
                  "@context" => "https://schema.org",
                  "@type" => "Article",
                  "headline" => "$article->title",
                  "description" => mb_substr(strip_tags($article->content), 0, 200),
                  "@id" => url('/') . "#article",
                  "language" => "zh-CN",
                  "publisher" => [
                    "@type" => "Organization",
                    "name" => html_entity_decode($information->title, ENT_QUOTES, 'UTF-8'),
                    "logo" => [
                      "@type" => "ImageObject",
                      "url" => asset($information->logo)
                    ],
                  ],
                  "datePublished" => Carbon\Carbon::parse($article->datetime)->toIso8601String(),
                  "dateModified" => Carbon\Carbon::parse($article->datetime)->toIso8601String(),
                  "image" => [
                    "@type" => "ImageObject",
                    "url" => asset($article->image),
                    "width" => 600,
                    "height" => 400
                  ],
                ], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
            @endphp
        </script>
    @else
        <title>{!! strip_tags($menu_page->name) !!} | {!! $information->title !!}</title>
        <meta property="og:title" content="{!! $information->title !!}" />
        <meta property="og:image" content="{{ asset($menu_page->banner) }}" />
        <meta property="og:image:secure_url" content="{{ asset($menu_page->banner) }}" />
    @endif
        <meta name="msvalidate.01" content="{{ $information->icp }}" />
        <meta property="og:type" content="website">
        <meta property="og:locale" content="zh-CN">
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:image:type" content="image/webp" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon-16x16.png') }}">
        <link rel="canonical" href="{{ url('/') }}" />
        <meta property="og:site_name" content="{!! $information->title !!}" />
        <style>.lozad {background-size: cover;background-position: center;opacity: 0;animation: fadeIn 0.5s ease;}  @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }</style>
        <style>.clean-list-container{border:1px solid #ccc;border-radius:12px;padding:16px;max-width:600px;margin:20px auto;background-color:#f9f9f9;}.clean-list{list-style:none;padding:0;margin:0;display:flex;flex-wrap:wrap;gap:12px;}.clean-list li{width:48%;background-color:#eee;padding:10px 12px;border-radius:8px;box-sizing:border-box;font-weight:bold;text-align:center;transition:background-color 0.3s;}.clean-list li:hover{background-color:#ddd;}</style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.js"></script>