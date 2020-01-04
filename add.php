<html>
<head>
    <title>Add Pelanggan</title>
</head>

<body>
<a href="index.php">Go to Home</a>
<br/><br/>

<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="Telepon"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $Nama = $_POST['Nama'];
    $Telepon = $_POST['Telepon'];
    $Alamat = $_POST['Alamat'];

    // include database connection file
    include_once("conn.php");

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO pelanggan(Nama,Telepon,Alamat) VALUES('$Nama','$Telepon','$Alamat')");

    // Show message when user added
    echo "User added successfully. <a href='index.php'>View Pelanggan</a>";
}
?>
</body>
</html>
