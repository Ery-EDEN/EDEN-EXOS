<?php
if(count($_GET) > 0) {
    if($_GET['page'] == 'catalogue') {
        require_once('catalogue.html');
    } else if ($_GET['page'] == 'home') {
        require_once('home.html');
    } else if ($_GET['page'] == 'reservation') {
        require_once('reservation.html');
    } else if ($_GET['pay'] == 'pay') {
        require_once('pay.html');
    }
} else { 
    require_once('home.html');
}
?>
