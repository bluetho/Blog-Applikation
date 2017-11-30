<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)


    if(isset($_SESSION['uid'])&&$_SESSION['uid']!=0){
        echo("Einträge von eingeloggtem User");
    }
    else{

        foreach ( getEntries(($_GET['bid'])) as $entry) {
            echo("<div >
                            <a  href='index.php?function=entries_public&bid=$blogId&eid=$entry[eid]'><h4> " . $entry['title'] . date("Y-m-d\   H:i:s", $entry['datetime']) . "</h4></a></div>");

        }
        if(!isset($_GET['eid'])){
            echo("Es wurde noch kein Eintrag ausgewählt, wählen Sie einen aus");
        }
        else {
            $entry = getEntry($_GET['eid']);
            echo("<div>");
            echo($entry['title'] . " " . date("Y-m-d\   H:i:s", $entry['datetime']) . "\b" . nl2br($entry['content']));
        }
}

    
/*

    foreach($entry as getAllBlogs()){
        $array.add($entry);
    }
    foreach ($arr as $array)
  */// Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
?>


