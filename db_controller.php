<?php
    // PostgreSQL connection info (from Render.com)
    $host = "dpg-d0ai2q6r433s73fnojsg-a";
    $port = "5432";
    $dbname = "alumni_db";
    $user = "mysql_hx4z_user"; // double-check name even if it says 'mysql'
    $password = "wvh7ee3avvYuprqxEMq1JqYJxfrlWrws";

    // Build connection string
    $conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

    // Try connecting
    $conn = pg_connect($conn_string);

    if (!$conn) {
        header('Location: maintenance.php');
        exit;
    }
?>
