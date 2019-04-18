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
echo"<h5>affiche le get : $newSession->password</h5>";

$rx4 = new Audi('Audi','RX4',4,1,4,0);
$newSession->rx4 = $rx4;

$z600 = new Kawasaki('Kawasaki',14444,2);
$newSession->z600 = $z600;

var_dump("ajouté en session !!");
//methodes magique isset et unset
echo"<h5>Methodes magiques isset et unset</h5>";
$newSession->username = 'Aurélien';
var_dump('ici mon attribut existe');
var_dump(isset($newSession->username));
var_dump('je le supprime');
unset($newSession->username);
var_dump('ici il n\'existe plus');
var_dump(isset($newSession->username));

echo"<h5>Serialize</h5>";

echo"serialize :<br/> ".serialize($newSession);

echo"<h5>Deserialize</h5>";

var_dump(unserialize(serialize($newSession)));
?>
<hr/>
<footer>Made by Roland Tabet</footer>
