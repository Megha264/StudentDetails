<html>
    <head>
        <title>Student Information</title>
    </head>
    <body>


    <center>
        <table  class="tb_view" cellpadding="5">
            <caption style="margin-bottom: 10px;">
                <div style="border-bottom: 3px solid #008080;text-align: center;">
                    <h1 style="color:fffffff;font-Serif: Times New Roman;text-shadow: 0px 0px 1px #333;">Student Information</h1>
                </div>
            </caption>
            <thead>
			
                <tr>
					
                    <th>Name</th>
	<th>Address</th>
	<th>City</th>
                    <th>Email</th> 
                    
					
					
                </tr>
				
            </thead>
            <tbody>
                <?php
                $host = 'student.cknrq7pie5wl.us-east-1.rds.amazonaws.com';
                $user = 'admin';
               $password = 'admin123';
               $database = 'student';
               $port = 3306;

               $host = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'student';
               $port = 3306;
                $con = mysqli_connect($host, $user, $password, $database, $port);
                $query = "SELECT * FROM `stud`";
                $result = mysqli_query($con, $query);

                $c = 0;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $data['name']; ?></td>
	<td><?php echo $data['address']; ?></td>
	<td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                       
                        
						
                    </tr>
                    <?php
                }
                ?>
                <?php ?>
            </body>
        </table>

    </center>
	</body>
</htmls>
	