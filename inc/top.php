<?php

include("lib/session.php");
if (!session_id() && !headers_sent()) {
  Session::init();
}
?> 

<?php
 $userid	=Session::get('userID');
?> 

<?php
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();
?> 