<h1><?php
echo "Hallo Welt";
    ?></h1>
<p><?php
echo date("d.m.Y H:i:s");
?></p>
<?php
$name="Niels";
echo"Mein name ist $name";
?>
<p><?php
$name="niels";
    $name .=" flachsbarth";
    $integer= 17;
    echo $name.$integer;
    ?></p>
<p>
    <?php
    $integer1 = 20;
    $integer2 = 30;
    $ergebnis = $integer1 + $integer2;
    echo "Ergebnis: $ergebnis";
    echo"<br/>";
    echo $integer1/$integer2;
    ?>
</p>
<?php
$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
echo "Hallo $vorname $nachname";
?>
<p>
<?php
$user = "Nils";

if($user == "Niels")
{
    echo "Hallo Niels";
}
else {
    echo"Du bist jemand anders";

}
?>
</p>
<form action="test2.php" method="post">
    <input type="Password" name="passwort" />
    <input type="Submit" value="Absenden" />
</form>
<p>
<?php
$int1 = 15;
$int2 = 20;

if($int1 < $int2) { //Vergleich von zwei Variablen
    echo "Int1 ist kleiner als int2 <br />";
}

if($int1 <= 100) { //Vergleich von Variable und Wert
    echo "Int1 ist kleiner oder gleich 100 <br />";
}

//Abspeicherung des Vergleichs in einer Variable
$tier = "Katze";
$string_vergleich = ($tier == "Katze");

echo 'Der Wert der Variable $string_vergleich ist: ';
var_dump($string_vergleich); //Ausgabe welchen Wert die Variable hat

if($string_vergleich) {
    echo " --- Der String Vergleich hatte den true Wert --";
}
?>
</p>
<?php
$zahl = 25;

if($zahl >= 10 AND $zahl <= 20) {
    echo "Die Zahl ist zwischen 10 und 20. <br />";
}

if( !($zahl >= 10 AND $zahl <= 20) ) {
    echo "Die Zahl war NICHT zwischen 10 und 20 <br />";
}
?>
<form action="test2.php" method="post">
    Username:<br>
    <input type="Text" name="username" /><br />
    Passwort:<br />
    <input type="Password" name="passwort" /><br />
    <input type="Submit" value="Absenden" /><br />
</form>
