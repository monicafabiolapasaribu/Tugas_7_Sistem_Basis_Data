<! DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database PHP </title>
	<style>
		body{
            min-height: 95vh;
            background-image: linear-gradient(-20deg,#ff2846 0%, #6944ff 100%);
            background: url(hh.jpeg)no-repeat;
            background-size: cover;
            font-family: quicsand;
        }
         table{
            text-align: center;
        }
        h1{
            color: lightskyblue; text-align: center; font-size: 40px; font-style: bold; font-family: georgia;
        }
        table,tr,td {
            border: solid 1px lightsteelblue;
            border-collapse: collapse;
            padding: 10px 15px;
            font-family: georgia;
            font-size: 18px;
        }
        thead {
            background-color: #8A2BE2;
        }
        }
	</style>
</head>
<body>
	<h1 style>Clinik_Monic</h1>
	<table>
		<thead>
			<tr>
				<td>No</td>
				<td>Id</td>
				<td>username</td>
				<td>password</td>
				<td>nama lengkap</td>
			</tr>
		</thead>
		<?php
		include "koneksi.php";
		$no = 1;
		$query = mysqli_query($conn, 'SELECT * FROM users');
		while ($data = mysqli_fetch_array($query)) {
?>
<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $data['id'] ?></td>
	<td><?php echo $data['username'] ?></td>
	<td><?php echo $data['password'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
</tr>
<?php } ?>
</table>
</body>