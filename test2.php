<?php
$passwort = $_POST["passwort"];

if($passwort=="geheim")
   {
   echo "Herzlich Willkommen im internen Bereich";
   }
else
   {
   echo "Das Passwort ist leider falsch";
   }
?>
<p>
<?php
$username = $_POST["username"];
$passwort = $_POST["passwort"];
$pass = sha1($passwort);


if($username=="Nils" AND $pass=="89cfb96efc4c673ec04899ca63f5ae9b83af43d1")
{
   echo "Zugriff erlaubt";
}
else
{
   echo "Zugriff fehlgeschlagen";
}
?>
</p>