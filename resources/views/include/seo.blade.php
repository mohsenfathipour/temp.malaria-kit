<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="language" content="FA">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="theme-color" content="#000000">

<link rel="icon" type="image/png" href="/assets/img/logo.svg" sizes="32x32">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo.svg">

<title>@section('seo.title')@show | برکت@show{{request()->has('page')?' - صفحه '.request('page'):''}}</title>
<meta name="description" content="@section('seo.meta.description'){{ config('settings.seo.description') }}@show">

@section('seo.meta.robots')
    <meta name="robots" content="index, follow"/>
@show

@section('seo.link.canonical')
    <link rel="canonical" href="{{ request()->url() }}"/>
@show

@section('seo.link.summary')
    <meta name="summary" content="{{ config('settings.seo.summary') }}">
@show

<meta name="subject" content="{{ config('settings.seo.subject') }}">
<meta name="generator" content="برکت">
<meta name="topic" content="{{ config('settings.seo.topic') }}">
<meta name="Classification" content="{{ config('settings.seo.classification') }}">
<meta name="url" content="{{ config('app.url') }}">
<meta name="identifier-URL" content="{{ config('app.url') }}">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">


<meta property="og:locale" content="fa_IR"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="برکت"/>
<meta property="og:title" content="@section('seo.title')@show | برکت"/>
<meta property="og:description" content="@section('seo.meta.description'){{ config('settings.seo.description') }}@show"/>
@section('seo.meta.og_image')
    <meta property="og:image" itemprop="image" content="{{ asset('assets/img/logo.svg') }}"/>
@show
@section('seo.meta.og_url')
    <meta property="og:url" content="{{ config('app.url') }}"/>
@show
@section('seo.meta.og_updated_time')
    <meta property="og:updated_time" content="{{ date('Y-m-d H:i:s') }}"/>
@show




<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="manifest" href="/manifest.json">



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FGZQ9Y0VHY"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FGZQ9Y0VHY');
</script>
