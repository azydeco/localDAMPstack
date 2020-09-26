<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php 
$host = 'db';
$user = 'root';
$pass = 'secret';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";

?>
<h4>All the php info you want and need. </h4>
<?php echo phpinfo()  ?>
