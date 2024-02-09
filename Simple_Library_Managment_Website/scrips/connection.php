<?php
if(isset($_POST['submit'])){
  $student_id = $_POST["student_id"];
  $title = $_POST["title"];
  $name = $_POST["name"];
  $book_id = $_POST["book_id"];
  $issue_date = $_POST["issue_date"];
  $return_date = $_POST["return_date"];

  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "library_web";

  $conn = mysqli_connect($host, $user, $pass, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO loan(student_id, title, name, book_id, issue_date, return_date) VALUES ('$student_id', '$title', '$name', '$book_id', '$issue_date', '$return_date')";

  if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
  } else {
    echo "Error inserting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
