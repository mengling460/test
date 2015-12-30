<?php

	$api='http://fundgz.1234567.com.cn/js/420001.js';
	$soure=iconv('GB2312', 'UTF-8',file_get_contents($api));
	$json_contents = substr($soure,8,-4);
    echo $json_contents;

?>
