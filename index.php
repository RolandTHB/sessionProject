<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 11:28
 */

include 'include.php';

?>
<h1>My new project session</h1>
<?php
$newSession = new Session();
var_dump($newSession);
$newSession->username = "Pascal";
$newSession->password = "Flash";
var_dump($newSession);
echo"<h5>affiche le get : $newSession->username</h5>";
echo"<h5>affiche le get : $newSession->password</h5>";

?>
<hr/>
<footer>Made by Roland Tabet</footer>
