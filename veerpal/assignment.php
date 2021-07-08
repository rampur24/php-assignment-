
<?php include('dbcon.php'); ?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>

</head>
<body>


<?php
 if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    //Checking is user existing in the database or not
        $query = "INSERT INTO `registration` (username, phone, email, address, country)
        VALUES ('$username', '$phone', '$email', '$address', '$country')";
       $result = mysqli_query($conn, $query);
        

    }
?>


 <form action="#" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Phone :</td>
    <td><input type="phone" name="phone" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Address :</td>
    <td><input type="address" name="address" required></td>
   </tr>
   <tr>
    <td>Country:</td>
    <td>
     <select name="country" required>
      <option selected hidden value="">Country select</option>
      <option value="Indian">India</option>
      <option value="USA">USA</option>
      <option value="China">China</option>
      <option value="UK">UK</option>
     </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></input></td>
   </tr>
  </table>
 </form>

 <table border="2">
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Phone</th>
     <th>Email</th>
     <th>Address</th>
     <th>Country</th>
    </tr>
  
<?php
  //$showdata = "select * form registration";
  $showdata = mysqli_query($conn,"select * from registration");
  while ($row = mysqli_fetch_array($showdata)) {
    
 
 echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    echo "<td>"; echo $row["username"]; echo "</td>";
    echo "<td>"; echo $row["phone"]; echo "</td>";
    echo "<td>"; echo $row["email"]; echo "</td>";
    echo "<td>"; echo $row["address"]; echo "</td>";
    echo "<td>"; echo $row["country"]; echo "</td>";
echo "</tr>";
 }

?>
 </table>
</body>
</html>