<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Test page</h1>
<p>this really is a lve message </p>
<?ph
echo "<p>this is some text</p>";
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>

