<?php
    // Replace these with your actual Render DB credentials
    $conn_host = "dpg-d0ai2q6r433s73fnojsg-a";  // Render's DB host
    $conn_port = 3306;                         // Use 3306 for MySQL
    $conn_username = "mysql_hx4z_user";
    $conn_password = "wvh7ee3avvYuprqxEMq1JqYJxfrlWrws";
    $conn_database = "alumni_db";              // The DB name Render gave you

    // Create connection
    $conn = new mysqli($conn_host, $conn_username, $conn_password, $conn_database, $conn_port);

    // Check connection and redirect if failed
    if ($conn->connect_error) {
        header('Location: maintenance.php');
        die();
    }
?>
