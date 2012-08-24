<?php
defined('_JEXEC') or die('Restricted access'); // no direct access ?>

<div class="mod_ck_player">
    <style type="text/css"></style>
    <script type="text/javascript" src="<?php echo $path_to_ck_js;?>/ck.js" charset="utf-8"></script>
    <script type="text/javascript">
        C.K(
            {
                f:'<?php echo $path_to_video;?>',
                b:'#000000',
                x:'<?php echo $path_to_ck_js;?>/ckplayer_mini.xml',
                c:0,
                e:1
            },
            "myckplayervideo",
            <?php echo $video_width;?>,
            <?php echo $video_height;?>
        );
    </script>
    <p id="myckplayervideo"></p>
</div>