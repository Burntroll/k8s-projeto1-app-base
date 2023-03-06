<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$id =  rand(1, 999);
$name = $_POST["name"];
$email = $_POST["email"];
$commentary = $_POST["commentary"];

$query = "INSERT INTO messages(id, name, email, commentary) VALUES ('$id', '$name', '$email', '$commentary')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>
