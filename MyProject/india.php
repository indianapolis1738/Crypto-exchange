<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jon', 'Doe', 'john@example.com');";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Joh', 'Doe', 'john@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
  echo "New records created successfully. Last record is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <style>
        *{
            background: rgb(173, 200, 216);
        }
        input{
            font-family: cursive;
            border: 2px solid rgb(219, 38, 25);
            border-radius: 5px;
            margin-top: 10px;
        }
        fieldset{
            border: 3px solid rgb(224, 64, 64);
            border-radius: 6px;
            width: 50%;
            margin-left: 25%;
        }
    </style>
    <body>
        <form>
            <fieldset>
                <center>
                <label>Email</label>
                <input type="email" name="email">
                <br>
                <label>Name</label>
                <input type="text" name="name">
                <br>
                <label>Number</label>
                <input type="tel" name="tel">
                <br>
                <label>password</label>
                <input type="password" name="password">
                <br>
                <input type="submit" name="submit">
            </center>
            </fieldset>
        </form>
    </body>
</html>