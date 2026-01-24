<?php
require "DBConnection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name  = $_POST["name"];
  $major = $_POST["major"];

  $stmt = $db->prepare(
    "INSERT INTO Students (name, major) VALUES (?, ?)"
  );
  $stmt->execute([$name, $major]);
  header("Location: viewStudents.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Student</title>
</head>
<body>
    <header class="header">
        <h1> 🧑‍🎓 University Students Management</h1>
    </header>
    <div id="addStudentDiv">
        <div>
            <h2>Add New Student</h2>
            <form method="post" action="">
               <label for="">Student Name :</label><br>
               <input type="text" name="name" required><br><br>
               <label for="">Major :</label><br>
               <input type="text" name="major" required><br><br>
               <input id="button1" type="submit" value="Save">
               <button id="button2">Cancel</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>© 2025 University System</p>
    </footer>
</body>
</html>
