<?php
/* 
 * Created Jasu Setälä 2017 (MIT-license) 
 * v1.0.0
 */
function chewRss($url, $num, $dateFormat, $descLen) {
    $rss = simplexml_load_file($url);
    if($rss) {
        echo '<div class="rssFeed">';
        echo '<h1>'.$rss->channel->title.'</h1>';
        $items = $rss->channel->item;
        if($num > count($items)) {
           $num = count($items);	
        }
        for($i = 0; $i < $num; $i++) {   
            $title = $items[$i]->title;
            $link = $items[$i]->link;
            $pubDate = $items[$i]->pubDate;
            $niceDate = date($dateFormat, strtotime($pubDate));
            $description = $items[$i]->description;
            if($descLen < strlen($description)) {
                $description = substr($description, 0, $descLen).'...';
            }
            if($descLen == 0) {
                echo '<p><h2><a href="'.$link.'">'.$title.'</a></h2> <h3>'.$niceDate.'</h3></p>';
            } else {
                echo '<p><h2><a href="'.$link.'">'.$title.'</a></h2> <h3>'.$niceDate.'</h3> <h4>'.$description.'</h4></p>';
            }
        }
        // end of <div class="rssFeed">
        echo '<div>'; 
    } else {
        // if $rss == false
        echo '<p>ERROR: Failed to load RSS feed</p>';
    }
}
?>