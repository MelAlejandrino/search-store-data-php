<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $bid =  $_REQUEST['bid'];
        $bname = $_REQUEST['bname'];
        $email = $_REQUEST['email'];
        $address =  $_REQUEST['address'];
        $ddate = date('d-m-y H:i:s');
        // Performing insert query execution
        // here our table name is college   
        $sql = "INSERT INTO basuras VALUES ('$bid',
            '$bname','$address','$email','$ddate','$ddate')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 

        } else{
           echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);

        }
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: index.php");
        die();
        ?>
    </center>
</body>
</html>