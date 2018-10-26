<?php
$config = file_exists(dirname(dirname(__FILE__))."/config.php");
if($config == 1):
include(dirname(dirname(__FILE__))."/config.php");
else:


endif;