<?php
/*
function megaInsert() {
    include("ConnectSite.php");
    $mega = array();
    for($i = 0; $i<5000; $i++) {
    $mega[$i]="Insert Into modul
    values(1,	\"SW0".$i."\",	\"Software Entwicklung 1\"	,\"1/3/5\",	\"Bachelor\",	\"Klausur\",	\"1. Architektur und grundlegende Sprachelemente 2. Variablen, Konstanten und primitive Datentypen 3. Typkompatibilität und Typkonversion 4. Operatoren und Ausdrücke 5. Datenein- und -ausgabe 6. Kontrollstrukturen 7. Klassen und Objekte 8. Objektmethoden 9. Vererbung und Polymorphismus 10. Abstrakte Klassen und Interfaces\",	\"Naturwissenschaften & Mathematik\",	5,	\"deutsch\");";
    }
    for($a = 0; $a < 5000; $a++) {
        mysqli_query($connection,$mega[$a]);
    }

}
*/


function modulNameInBeschreibung() {
                       
    include("ConnectSite.php");
                   
    $sql = "Select UniID, Beschreibung, ModulName
            From modul;";
    $result = mysqli_query($connection, $sql);
    $result_check = mysqli_num_rows($result);
                   
    if ($result_check>0) {
        while($beschreibungen = mysqli_fetch_assoc($result)) {   //$beschreibungen wird zu assoziativen Array
            if((substr_count($beschreibungen['Beschreibung'],ucfirst($_POST["modulName"]))>0)||(substr_count($beschreibungen["ModulName"],$_POST["modulName"])>0)) {
                return $beschreibungen["UniID"];
            }   
        }
    }
}
//Einträge in Datenbank müssen mit Großbuchstaben beginnen--> später funktion dafür schreiben


function uniIDFinder($uniID) {

    include("ConnectSite.php");

    $result = mysqli_query($connection,"Select UniID, UniName from universitaet");
    $result_check = mysqli_num_rows($result);

    if($result_check>0) {
        while($id_s = mysqli_fetch_assoc($result)) {
            if($id_s["UniID"]===$uniID) {
                return $id_s["UniName"];
            }
            else {
                continue;
            }
        }
    }
}