<?php

$db = new SQLite3("EnigmaIncDB.db");

if ($db){
    echo "Database is successfully connected";
}
else{
    echo "Fail to connect the database";
}

?>