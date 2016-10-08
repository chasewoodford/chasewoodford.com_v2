<?php

$pin = $_POST['pin'];

if($pin === 'esahc'){

    $username = "dbo541682804";
    $password = "8s3IAftWzK5BWPL";
    $hostname = "db541682804.db.1and1.com";
    $database = "db541682804";

    //connect to database
    $dbhandle = mysqli_connect($hostname, $username, $password, $database)
    or die("Unable to connect to MySQL");
    echo "Connected to MySQL<br>";

    //select database
    $selected = mysqli_select_db($dbhandle, $database)
    or die("Could not select database");

    //retrieve form values
    $date = $_POST['date'];
    $weight = $_POST['weight'];

    //insert statement
    $order = "INSERT INTO weight_tracker (date, weight)
                VALUES ('$date','$weight')";

    //declare order variable
    $result = mysqli_query($dbhandle, $order);
    if($result){
        echo("Input data is great success! " . $date . " and " . $weight);
    } else {
        echo("Input data is #fail");
    }
} else {
    echo "No, no, no. That's all wrong. All wrong.";
}

?>

<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
        location.href = 'http://www.chasewoodford.com/playground/weight-tracker';
    }, 5000);
</script>