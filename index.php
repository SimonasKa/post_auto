<?php
include 'db_connection.php';

if ($result = mysqli_query($link, "SELECT Name FROM City LIMIT 10")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));

    /* free result set */
    mysqli_free_result($result);
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

function getData($sql, $link){
    if($result = mysqli_query($link, $sql)){
        return $result;
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
        return null;
    }

}

function insertData($sql, $link){

}
?>
