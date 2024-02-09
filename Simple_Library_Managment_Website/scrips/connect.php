<?php
$number = $_POST["student_id"];
$title = $_POST["title"];
$name = $_POST["name"];
$book_code = $_POST["book_id"];
$issue_date = $_POST["issue_date"];
$return_date = $_POST["return_date"];

$link=mysqli_connect("localhost","root","","library_web","loan");
if(!$link){
	die("Error connection:").mysqli_error($link);
}else{
    $stmt = $conn->prepare("insert into loan(book_id, student_id, issued_date, due_date) values(?, ?, ?, ?)");
    $stmt->bind_param("iidd", $book_id, $student_id, $issued_date, $due_date);
    $stmt->execute();
    echo "loan successfully!";
    $stmt->close();
    $stmt->close();
}

?>