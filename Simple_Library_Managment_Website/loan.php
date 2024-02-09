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

  // Create a connection
  $conn = mysqli_connect($host, $user, $pass, $dbname);

  // Check the connection
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
    <link rel="stylesheet" href="css/loan.css">
    <script defer src="scrips/loan.js"></script>
    <!-- <script>
        function validateForm(){
            var x = document.form.student_id.value;
            if ( x == null || x == ""){
                alert("Student Id must be filled out!")
                return false
            }
        }
    </script> -->
</head>
<body>

    <header class="header">
        <img src="assets/dbu-logo1.png" alt="logo">
        <a href="base.html" class="logo">DBU Main Library</a>
        <nav class="nav">
            <a href="base.html" class="btn">Log <span>Out</span></a>
        </nav>
    </header>
    
    <section class="loan" id="loan">
        <h2 class="heading">Loan</h2>

        <form action="scrips/connection.php" class="form" id="form" method="post" onsubmit="return validateForm()">
                <h4 class="name">ID</h4><input type="number" placeholder="Enter Your ID" name="student_id" required>
                <h4 class="name">Book Title</h4><input type="text" placeholder="Enter The Books Title" name="title" required>
                <h4 class="name">Name</h4><input type="text" placeholder="Enter Your Name" name="name" required>
                <h4 class="name">Book Code</h4><input type="number" placeholder="Enter Books Code" name="book_id" required>
                <!-- <input type="number" placeholder="Enter Your Phone Number" name="phone_number"> -->
                <h4 class="name">Issue Date</h4><input type="date" placeholder="Issue Date" name="issue_date" required>
                <h4 class="name">Due Date</h4><input type="date" placeholder="Due Date" name="return_date" required>
            <input type="submit" value="Loan" class="btn">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Web Programming group asingment &copy; 2023</p>
        </div>
        <div class="footer-top">
            <a href="base.html" class="btn">
                <img src="assets/arrow_upward_FILL0_wght400_GRAD0_opsz48.png" alt="img">
            </a>
        </div>
    </footer>

</body>
</html>