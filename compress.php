<?php
if(isset($_POST['text']) && isset($_POST['level'])){
                $level = urldecode($_POST['level']);
                $two = urldecode($_POST['text']);
                $compressed = gzcompress( $level, $level );
                echo $compressed;
}
?>
