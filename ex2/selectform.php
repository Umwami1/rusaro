<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>View All </h1>
        <table border="1" width="50%" height="50%">
            <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Password</th>
               <th>Location</th>
               <th>Actions</th>
            </tr>
      

        <?php
    $conn=mysqli_connect("localhost","root","","idatech");

    $sql="SELECT * FROM user";
    $a=mysqli_query($conn,$sql);
    while($tax=$a->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $tax['id']; ?></td>
            <td><?php echo $tax['name']; ?></td>
            <td><?php echo $tax['password']; ?></td>
            <td><?php echo $tax['Location']; ?></td>
            <td><a href="update.php">Edite||<a href="delete.php">Delete</a></a></td>
        </tr>
        <?php }
        ?>
    </table>
    </center>
</body>
</html>