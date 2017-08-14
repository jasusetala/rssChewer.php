#rssChewer.php

rssChewer.php is a simple RSS feed reader.

##How to use

You need only three lines of code.

```
<?php
date_default_timezone_set('UTC');
include('path/rssChewer.min.php');
chewRss('http://feeds.bbci.co.uk/news/rss.xml', 10, 'd/m/Y', 140);
?>
```

[List of supported timezones](http://php.net/manual/en/timezones.php)

[Date formatting](http://php.net/manual/en/function.date.php)

##Parameters

chewRss(*feed url, number of items, date format, length of description*)

Tip: If you want to disable description give it value 0.

##HTML output

```
<div class="rssFeed">
    <h1>Feed title</h1>
    <p>
        <h2><a href="url">Item title</a></h2>
        <h3>Date</h3>
        <h4>Desctiption</h4>
    </p>
    ...
<div>
```

##CSS

```
.rssFeed h1 { /*Feed title*/ }
.rssFeed p { /*Feed entry*/ }
.rssFeed h2 { /*Item title*/ }
.rssFeed h3 { /*Date*/ }
.rssFeed h4 { /*Desctiption*/ }
.rssFeed a:link,
.rssFeed a:visited,
.rssFeed a:active,
.rssFeed a:hover { /*Link*/ }
```

Or if you prefer SCSS:

```
.rssFeed {
    h1 { /*Feed title*/ }
    p { /*Feed entry*/ }
    h2 { /*Item title*/ }
    h3 { /*Date*/ }
    h4 { /*Desctiption*/ }
    a:link,
    a:visited,
    a:active,
    a:hover { /*Link*/ }
}
```