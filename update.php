<?php 
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
} 
?>
<!DOCTYPE html>
<html>    
<head>        
	<meta charset="UTF-8">
	        <title><?php echo $profile_data['username'] ?>'s Profile</title>
</head>
<body>
    <a href="index.php">Home</a> | <?php
	$profile_data=0;
	$user_id = $_SESSION['user_id'];
                        $query = "SELECT users.name as Name from users";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        
		
echo $profile_data['name'] ?>'s Profile        
    <h3>Personal Information | <? php            $visitor = $_SESSION['name'];
	$profile_data=NULL;
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $profile_data['name'] ?>">Edit Profile</a>            <?php

        ?>        </h3>        
        <table>
                    <tr>                
                    	<td>Name:</td><td><?php echo $profile_data['full_name'] ?></td>   
                    </tr>
                    <tr>                
                    	<td>Age:</td><td><?php echo $profile_data['age'] ?></td> 
                    </tr> 
                    <tr>
                        <td>Gender:</td><td><?php echo $profile_data['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td><td><?php echo $profile_data['address'] ?></td> 
                    </tr>        
        </table> 
    </body>
</html> 
