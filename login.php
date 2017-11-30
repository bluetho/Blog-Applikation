<?php
    //wenn noch nicht eingeloggt
        if(getUserIdFromSession()!=0){
            echo("bereits eingeloggt");
            echo("<a href='index.php?function=logout'>   Ausloggen</a>");
        }
        else{
                if(isset($_POST['passwort'])&& isset($_POST['email'])){
                    if(getUserIdFromDb($_POST['email'], $_POST['passwort'])!=0){
                        $_SESSION['uid']=getUserIdFromDb($_POST['email'], $_POST['passwort']);
                        header("Location: index.php?function=addEntry&bid=$blogId");
                        echo("erfolgreich eingeloggt");
                        echo("<a href='index.php?function=logout'>Ausloggen</a>");
                    }
                    else{
                        echo("<form method=\"post\" action=\"index.php?function=login&bid=0\">
                      <label for=\"email\">Benutzername</label>
                      <div>
                        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"E-Mail\" value=\"\" />
                      </div>
                      <label for=\"passwort\">Passwort(USER ODER PW WAR FALSCH)</label>
                      <div>
                        <input type=\"password\" id=\"passwort\" name=\"passwort\" placeholder=\"Passwort\" value=\"\" />
                      </div>
                      <div>
                        <button type=\"submit\">senden</button>
                      </div>
                    </form>");
                    }
                }else {
                    echo("<form method=\"post\" action=\"index.php?function=login&bid=0\">
                      <label for=\"email\">Benutzername</label>
                      <div>
                        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"E-Mail\" value=\"\" />
                      </div>
                      <label for=\"passwort\">Passwort</label>
                      <div>
                        <input type=\"password\" id=\"passwort\" name=\"passwort\" placeholder=\"Passwort\" value=\"\" />
                      </div>
                      <div>
                        <button type=\"submit\">senden</button>
                      </div>
                    </form>");}

    }
  $meldung = "";
  $email = "";
  $passwort = "";
  // $_SERVER['PHP_SELF'] = login.php in diesem Fall (also die PHP-Datei, die gerade ausgeführt wird).
  // Mit andern Worten: Nach Senden des Formulars wird wieder login.php aufgerufen.
  // Die Funktionen zur Überprüfung, ob die Login-Daten gültig sind, muss also hier oben im PHP-Teil stehen!
  // Wenn Login-Daten korrekt sind:
  // Session-Variable mit Benutzer-ID setzen und Wechsel in Memberbereich
  // $_SESSION['uid'] = $uid;	
  // header('Location: index.php?function=entries_member');
  // Wenn Formular gesendet worden ist, die Login-Daten aber nicht korrekt sind:
  // Unten auf der Seite Anzeige der Fehlermeldung.
?>

