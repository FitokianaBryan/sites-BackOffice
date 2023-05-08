<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Article</title>
    <style type="text/css">
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
            line-height: 1.4;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .author {
            font-size: 16px;
        }
        .date {
            font-size: 16px;
        }
        .summary {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .content {
            font-size: 18px;
        }
        .image {
            width: 50%;
            float: right;
            margin-left: 20px;
        }
        .image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="title">{{ $article->titre }}</div>
        <div class="image">
            <img src="{{ $article->image }}">
        </div>
    </div>
    <div class="author">Publié par : {{ $article->getAuteur()->nom }} {{ $article->getAuteur()->prenom }}</div>
    <div class="date">Le {{ $article->getPublication()->publish_at }}</div>
    <div class="summary">{{ $article->resume }}</div>
    <div class="content">{!! $article->contenu !!}</div>
</div>
</body>
</html>
