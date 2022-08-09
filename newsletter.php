<!DOCTYPE html>
<html>
 
<head>
    <title>Contact Form</title>
</head>
 
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "anacky_portfolio", "PS1QSuoZQo9Q", "anacky_portfolio");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO newsletter(email)  VALUES ('$email')";
         
        if(mysqli_query($conn, $sql)){
            header("Location: index.php?success=true");
			die();
            
          
        } else{
            header("Location: index.php?success=false");
			die();
            
        }


		/* if(mysqli_query($conn, $sql)){
            header("Location: index.php");
			die();
            echo "<h3>data stored in a database successfully.";
          
        } else{
          	header("Location: index.php");
			die();
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        } */
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
  
			
</body>
 
</html>