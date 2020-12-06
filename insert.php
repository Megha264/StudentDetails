<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<center>
	
    <?php
    if (isset($_POST['add'])) {
        
        $host = 'student.cknrq7pie5wl.us-east-1.rds.amazonaws.com';
      $user = 'admin';
       $password = 'admin123';
       $database = 'student';
       $port = 3306;

        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $email = $_POST['email'];
       
        
		

        $conn = mysqli_connect($host, $user, $password, $database, $port);



        if ($conn) {
            
        } else {
            die("Database Connection Failed.");
        }

        $query = "INSERT INTO `stud`(`name`, `address`,`city`, `email`) VALUES 
		('" . $name . "','" . $address . "','" . $city . "','" . $email . "')";
		
		
        $res = mysqli_query($conn, $query);

        if ($res > 0) {
            header('location:view.php');
        }
    }
    ?>
    <body>
 
	<h1 style="color:fffffff;font-variant: calibri;text-shadow: 0px 0px 1px #333;">Student Registration </h1>
        <form  border="5" method = "post">
         <table width = "400" border = "3" cellspacing = "1" 
                   cellpadding = "2">

                <tr>
                   <td width = "100">Name</td>
                    <td><input name = "name" type = "text" 
                               id = "name" required></td>
							   
                </tr>
				
				<tr>
                    <td width = "100">Address</td>
                    <td><textarea input name = "address"  
                               id = "address" required></textarea></td>
							   
                </tr>
				
				<tr>
                    <td width = "100">City</td>
                    <td><input name = "city" type = "text" 
                               id = "city"  required></td>
                </tr>

                <tr>
                    <td width = "100">Email</td>
                    <td><input name = "email" type = "text" 
                               id = "email"  required></td>
                </tr>

                
                
		
                <tr>
                    <td width = "150"> </td>
                    <td>
						<button name="add" type="submit" id = "add" class="registerbtn" value = "Add register"><b>Register</b></button>
						
                    </td>
</tr>

                

            </table>
        </form>
        <a href="view.php"><button><b>Go to Student Details</b></button></a>
</center>
   
</body>
</html>
