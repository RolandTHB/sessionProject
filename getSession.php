<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 18/04/2019
 * Time: 10:23
 */

include 'include.php';


$session = new Session();
foreach ($session->getAttributs() as $attr) {
    var_dump(unserialize($attr));
}

?>