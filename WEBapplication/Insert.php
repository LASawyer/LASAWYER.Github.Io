<?php
$db = new SQLite3("EnigmaIncDB.db");
if ($db) {
     "Database is successfully connected<br>";

    $tables = array( // Defines the arrays for table and what columns are in them 
        "Job" => array("Job_Class", "CHG_Hour"),
        "Project" => array("ProjectNumber", "ProjectName"),
        "Assignment" => array("ProjectNumber", "Employee_NO", "Hours"),
        "Employee" => array("Employee_NO", "Employee_FName", "Employee_MName", "Employee_LName", "Job_Class")
    );

    echo "<form method='post' action=''>"; 
    echo "<label for='table'>Select a table:</label>";
    echo "<select id='table' name='table' onchange='showFields(this.value)'>";
    echo "<option value=''>Select a table</option>";
    foreach ($tables as $table => $columns) {
        echo "<option value='$table'>$table</option>";
    }
    echo "</select><br>"; 
    
    echo "<div id='table_fields'></div>";
    echo "<br><input type='submit' name='submit' value='Insert Data'>"; //Submisson button
    echo "</form>";

    if (isset($_POST['submit'])) {  //If the form is submitted/Submitted button pressed
        $table = $_POST['table'];
        $columns = $tables[$table];
        $values = array();

        foreach ($columns as $column) { //loops every collumn and adds the data into the $value to be used in the SQL query
            $values[] = $_POST[$column];
        }

        // Creates the SQL query the insert the data the user has provided into the DBBrowser Database
        $query = "INSERT INTO $table (" . implode(", ", $columns) . ") VALUES ('" . implode("', '", $values) . "')";
        $result = $db->query($query); //Execute query
        if ($result) {
            echo "Data inserted successfully into the $table table.";
        } else {
            echo "Error inserting data: " . $db->lastErrorMsg();
        }
    }

    $db->close();
} else {
    echo "Failed to connect to the database";
}

?>

<script> //This is the script that displays the columns of data that need to be inserted ONLY when the table is selected from a drop down list
    function showFields(table) {
        var columns = <?php echo json_encode($tables); ?>;
        var fieldsHTML = "";
        if (table && columns[table]) {
            columns[table].forEach(function(column) {
                fieldsHTML += "<label for='" + column + "'>" + column + ":</label>"; //Display for collumn names
                fieldsHTML += "<input type='text' id='" + column + "' name='" + column + "'><br>"; //Text for user to write in data
            });
        }
        document.getElementById('table_fields').innerHTML = fieldsHTML;
    }
</script>

