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
$newSession->password = "Flash";
var_dump($newSession);
echo"<h5>affiche le get : $newSession->password</h5>";

$session = new Session();
$session->username = 'Aurélien';
var_dump('ici mon attribut existe');
var_dump(isset($session->username));
var_dump('je le supprime');
unset($session->username);
var_dump('ici il n\'existe plus');
var_dump(isset($session->username));
echo"<h5>Serialize</h5>";
echo"serialize chien".serialize($newSession);
echo"<h5>Deserialize</h5>";
var_dump(unserialize(serialize($newSession)));
?>
<hr/>
<footer>Made by Roland Tabet</footer>
