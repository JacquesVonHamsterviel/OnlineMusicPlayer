<?php
if (isset($_GET["target"])){
        $url=base64_decode($_GET["target"]);
        $options  = array('http' => array('user_agent' => $_SERVER['HTTP_USER_AGENT']));
        $context  = stream_context_create($options);
        $contents = file_get_contents($url, false, $context);
        echo $contents;
        }else{echo "Access Denied with error: argument error.";}
?>