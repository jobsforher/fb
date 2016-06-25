  <html>
  <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */
 


    $link = mysqli_connect("db4free.net", "jfh_root", "jfh123", "jfh_details");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_POST['name']);

    $email = mysqli_real_escape_string($link, $_POST['email']);

    $phone = mysqli_real_escape_string($link, $_POST['phone']);

     

    // attempt insert query execution
    
   if(isset($_REQUEST['submit']))
  {

    $sql = "INSERT INTO info (name, email, number) VALUES ('$name', '$email', '$phone')";

    if(mysqli_query($link, $sql)){
        
         echo "Records added";
    
    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
   header("location:http://www.jobsforher.com/uploads/ebook/restarter-journeys-vol-1.pdf");
   }

    // close connection

    mysqli_close($link);

    ?>
</html>
