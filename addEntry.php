<?php

if(getUserIdFromSession()==0){
    header("Location: index.php?function=login&bid=$blogId");
}


// NICHT GESCHAUT WENN NICHT AUSGEFèLLT UND ANFANG
if(isset($_POST['mode'])&&$_POST['mode']=="overWrite"){
    if(isset($_POST['title'],$_POST['content'])&&$_POST['title']!='' &&$_POST['content']!=''){

        updateEntry($_POST['eid'], $_POST['title'], $_POST['content']);
        echo("Beitrag erfolgreich überschrieben.");
    }
    else{
        echo(" <form method=\"post\" action=\"index.php?function=addEntry\">
            
            <h4>Titel</h4><br>
            <textarea id='titel' name='title' placeholder=\"Titel\">".getEntry($_POST['eid'])['title']."</textarea><br>
            <h4>Inhalt</h4>
            <textarea id='content' name=\"content\" cols=\"110\" rows=\"20\">". getEntry($_POST['eid'])['content']."</textarea>
            <br>            
            <button value='overWrite' name=\"mode\" type=\"submit\">senden</button>
            <input hidden name='eid' value='".$_POST['eid']."'>
            <input hidden name=mode' value='overWrite'>

            </form> ");}
}





else if(isset($_GET['newEntry'])&&$_GET['newEntry']==true){
    if($_POST['title']=='' ||$_POST['content']==''){
        echo(" <form method=\"post\" action=\"index.php?function=addEntry&newEntry=true'\">
            <h3>Beide Felder müssen ausgefüllt sein</h3>
            <h4>Titel</h4><br>
            <input id='titel' name='title' placeholder=\"Titel\"><br>
            <h4>Inhalt</h4>
            <textarea id='content' name=\"content\" cols=\"110\" rows=\"20\"></textarea>
            <br>
            
            <button type=\"submit\">senden</button>
            </form> ");
    }
    else{
        
    addEntry($_SESSION['uid'], $_POST['title'], $_POST['content']);
}}





else {

    echo(" <form method=\"post\" action=\"index.php?function=addEntry&newEntry=true'\">
            <h4>Titel</h4><br>
            <input id='titel' name='title' placeholder=\"Titel\"><br>
            <h4>Inhalt</h4>
            <textarea id='content' name=\"content\" cols=\"110\" rows=\"20\"></textarea>
            <br>
            
            <button type=\"submit\">senden</button>
            </form> ");
}

?>