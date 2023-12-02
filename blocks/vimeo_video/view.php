<?php

defined('C5_EXECUTE') or die('Access Denied.');
?>

<div id="vimeo<?= $bID; ?>" class="vimeoBlock" style="padding:56.25% 0 0 0;position:relative;">
    <iframe class="vimeo-player"
            src="//player.vimeo.com/video/<?php echo $videoID ;?>?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;app_id=58479"
            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
            style="position:absolute;top:0;left:0;width:100%;height:100%;"
            title="">
    </iframe>
</div>
