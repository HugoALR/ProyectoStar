<?php

include('db.php');

if (isset($_POST['save_task'])) {
    /*echo 'Saving';*/
    $title = $_POST['title'];
    $description = $_POST['description'];
    /*Valores a introducir en la BD */
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    /*echo $title 
    echo description*/
    
    /*Generate Consult*/
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
