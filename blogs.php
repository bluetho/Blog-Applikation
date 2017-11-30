<?php
// Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  // Hier Code....

    //liste alle Benutzer in einer Liste auf

    echo("<div>");
        foreach(getUserNames() as $user){
            if($blogId== $user['uid']){

                echo("<div><a href='index.php?function=blogs&bid=$user[uid]' title='Blog auswählen'><h4 style='color:red'>$user[name]</h4></a></div>");
            }else{
                echo("<div><a href='index.php?function=blogs&bid=$user[uid]' title='Blog auswählen'><h4>$user[name]</h4></a></div>");
            }
        }
        echo("</div>");


  // Schlaufe über alle Blogs bzw. Benutzer
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden
?>
