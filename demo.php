<html>
<head>
    <title>rssChewer Demo</title>
    <style>
    .rssFeed h1 { font-size: 2em }
    .rssFeed p { display: inline }    
    .rssFeed h2, .rssFeed h3, .rssFeed h4 { font-size: 1em; font-weight: normal }
    </style>
</head>
<body>
    <?php
    date_default_timezone_set('UTC');
    include('rssChewer.php');
    chewRss('http://feeds.bbci.co.uk/news/rss.xml', 10, 'd/m/Y', 100);
    ?>
</body>
</html>