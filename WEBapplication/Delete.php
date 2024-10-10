<?php
$db = new SQLite3("EnigmaIncDB.db");
if ($db) {
     "Database is successfully connected<br>";

    $tables = array( //Defines Table as an array 
        "Job",
        "Project",
        "Assignment",
        "Employee"
    );

    echo "<form method='post' action=''>";
    echo "<label for='table'>Select a table:</label>";
    echo "<select id='table' name='table'>";
    echo "<option value=''>Select a table</option>";
    foreach ($tables as $table) {
        echo "<option value='$table'>$table</option>";
    }
    echo "</select><br>";

    echo "<label for='row_value'>Enter the number of the row that you want to delete :</label>";
    echo "<input type='text' id='row_value' name='row_value'><br>";
    echo "<br><input type='submit' name='submit' value='Delete Row'>"; //Submisson button
    echo "</form>";

    if (isset($_POST['submit'])) {
        $table = $_POST['table'];
        $row_value = $_POST['row_value'];

        if (!empty($table) && !empty($row_value)) {
            $query = "DELETE FROM $table WHERE ROWID = $row_value"; //Delete the Row that corresponds to the provided row value
            $result = $db->query($query); //Execute query

            if ($result) {
                echo "Row with number value $row_value deleted successfully from the $table table.";
            } else {
                echo "Error deleting row: $row_value Please check connection and Try again " . $db->lastErrorMsg();
            }
        } else { //If no table is selected OR if no data is entered then this will display 
            echo "Please select a table and enter the primary key value.";
        }
    }

    $db->close();
} else {
    echo "Failed to connect to the database";
}

?>
