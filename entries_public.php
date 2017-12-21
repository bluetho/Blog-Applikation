<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)



    //DAS IST MEMBER
    if(isset($_SESSION['uid'])&&$_SESSION['uid']!=0) {
        foreach (getEntries($_SESSION['uid']) as $entry) {
            echo("<div >
                            <a  href='index.php?function=entries_public&bid=$blogId&eid=$entry[eid]'><h4> " . $entry['title'] . date("Y-m-d\   H:i:s", $entry['datetime']) . "</h4></a></div>");

        }
        if (!isset($_GET['eid'])) {
            echo("Es wurde noch kein Eintrag ausgewählt, wählen Sie einen aus");
        } else {

            $entry = getEntry($_GET['eid']);
            //var_dump($entry['eid']);
            echo("<div>");                                                                                                                                                                                                                                                                                     //GIBT HIER NUR 'E' AUS
            echo($entry['title'] . " " . date("Y-m-d\   H:i:s", $entry['datetime']   ) . "<form method=\"post\" action=\"index.php?function=addEntry\"><input type=\"submit\" value=\"überarbeiten\"><input hidden name='eid' value='$entry[eid]' ><input hidden name='eid' value='$entry[eid]'><input hidden name='mode' value='overWrite' ></form> <form method=\"post\" action=\"index.php?function=deleteEntry\"> <input type=\"submit\" value=\"löschen\"><input hidden name='eid' value='$entry[eid]' ></form><br>" . nl2br($entry['content']));

        }

    }



    //DAS IST nicht member
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


