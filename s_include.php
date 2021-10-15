<?php
if($_POST['01200011214'] != 'secretpassword'){
    echo "Access Denied.";
    exit;
}
mysqlx_query("UPDATE users SET total=total+".$_POST['payout']." WHERE tracking_id=".$_POST['tracking_id'],$db);
?>