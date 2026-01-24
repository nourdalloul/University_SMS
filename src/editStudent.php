<?php

require "DBConnection.php";

$id = $_GET['id'];/*جلب البيانات القديمة */

$stmt = $db->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$student) {
    die("Student not found");
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {/*تخزين البيانات الجديدة*/
    $name = $_POST['name'];
    $major = $_POST['major'];

    $stmt = $db->prepare(
      "UPDATE Students SET name = ?, major = ? WHERE id = ?"
    );
    $stmt->execute([$name,$major,$id]);
  
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
    <title>Edit Student</title>
</head>
<body>
    <header class="header">
        <h1> 🧑‍🎓 University Students Management</h1>
    </header>
    <div id="editStudentDiv">
        <div>
            <h2>Edit Student</h2>
            <form method ="post" action="">
               <label for="">Student Name :</label><br>
               <input name ="name" type="text" value="<?= htmlspecialchars($student['name']) ?>"><br><br>
               <label for="">Major :</label><br>
               <input name = "major"type="text" value="<?= htmlspecialchars($student['major']) ?>"><br><br>
               <input type="submit" value="Update" id="button1">
               <button id="button2">Cancel</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>© 2025 University System</p>
    </footer>
</body>
</html>