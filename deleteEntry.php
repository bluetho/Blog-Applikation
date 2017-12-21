<?php
if(getUserIdFromSession()==0){
    header("Location: index.php?function=login&bid=$blogId");
}
if(isset($_POST['eid'])){
    deleteEntry($_POST['eid']);
    echo("gelöscht");
}
else{
echo("nichts zum löschen ausgewählt");
}
?>