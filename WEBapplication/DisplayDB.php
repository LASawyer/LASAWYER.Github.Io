<?php
$db = new SQLite3("EnigmaIncDB.db");
if ($db) {
     "Database is successfully connected<br>";

    $queryJob = "SELECT * FROM Job"; // Selects all the data from the Job table
    $resultJob = $db->query($queryJob);
    echo "<h2>Job Table</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Job_Class</th><th>CHG_Hour</th></tr>"; // This echos every collumn that is in the database and the head of the table (TH) 
    while ($row = $resultJob->fetchArray(SQLITE3_ASSOC)) { //Fetches Each row of data From the Specific Table
        echo "<tr>"; //TR displays all the rows of the table
        echo "<td>" . $row['Job_Class'] . "</td>";   
        echo "<td>" . $row['CHG_Hour'] . "</td>"; //TD displays all the Data of the table of each row
        echo "</tr>";
    }
    echo "</table><br>";

    $queryProject = "SELECT * FROM Project"; // Selects all the data from the Project table
    $resultProject = $db->query($queryProject);
    echo "<h2>Project Table</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ProjectNumber</th><th>ProjectName</th></tr>";
    while ($row = $resultProject->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['ProjectNumber'] . "</td>";
        echo "<td>" . $row['ProjectName'] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";

    $queryAssignment = "SELECT * FROM Assignment";  // Selects all the data from the Assignment table
    $resultAssignment = $db->query($queryAssignment);
    echo "<h2>Assignment Table</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ProjectNumber</th><th>Employee_NO</th><th>Hours</th></tr>";
    while ($row = $resultAssignment->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['ProjectNumber'] . "</td>";
        echo "<td>" . $row['Employee_NO'] . "</td>";
        echo "<td>" . $row['Hours'] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";

    $queryEmployee = "SELECT * FROM Employee";     // Selects all the data from the Employee table
    $resultEmployee = $db->query($queryEmployee);
    echo "<h2>Employee Table</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Employee_NO</th><th>Employee_FName</th><th>Employee_MName</th><th>Employee_LName</th><th>Job_Class</th></tr>";
    while ($row = $resultEmployee->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['Employee_NO'] . "</td>";
        echo "<td>" . $row['Employee_FName'] . "</td>";
        echo "<td>" . $row['Employee_MName'] . "</td>";
        echo "<td>" . $row['Employee_LName'] . "</td>";
        echo "<td>" . $row['Job_Class'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $db->close();
} else {
    echo "Failed to connect to the database";
}

?>
