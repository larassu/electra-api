<?php
// include database connection file
include_once("conn.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $IDPel = $_POST['IDPel'];

    $Nama=$_POST['Nama'];
    $Telepon=$_POST['Telepon'];
    $Alamat=$_POST['Alamat'];

    // update user data
    $result = mysqli_query($conn, "UPDATE pelanggan SET Nama='$Nama',Telepon='$Telepon',Alamat='$Alamat' WHERE IDPel=$IDPel");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$IDPel = $_GET['IDPel'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pelanggan WHERE IDPel=$IDPel");
while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama'];
    $Telepon = $user_data['Telepon'];
    $Alamat = $user_data['Alamat'];
}
?>
<html>
<head>
    <title>Edit Data Pelanggan</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="update_user" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="Telepon" value=<?php echo $Telepon;?>></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="IDPel" value=<?php echo $IDPel;?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
<h1>Data <a>Server</a></h1>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
    </tr>
    </thead>
    <tbody id="data-server"></tbody>
</table>
<script src="assets/jquery.min.js"></script>
<script>
    $.get('https://rest-api-tester.000webhostapp.com/rest-api-fix/api', function (data) {
        var content = '';
        $.each(JSON.parse(data), function (i, val) {
            i = i + 1;
            content +=
                '<tr>' +
                '<td>'+i+'</td>' +
                '<td>'+val.first_name+'</td>' +
                '<td>'+val.last_name+'</td>' +
                '</tr>'
        });
        $("#data-server").html(content);
    })
</script>
</body>
</html>
