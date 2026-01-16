<?php
require "DBConnection.php";
$students = $db->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> SMS </title>
</head>
<body>
    <header class="header">
        <h1> 🧑‍🎓 University Students Management</h1>
    </header>
    <div id="viewStudentsDiv">
        <h2>University Students Management System</h2>
        <table >
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Major</th>
                <th>Action</th>
            </tr>
            <?php foreach ($students as $s): ?>
               <tr>
                  <td><?= $s["id"] ?></td>
                  <td><?= $s["name"] ?></td>
                  <td><?= $s["major"] ?></td>
                  <td>
                  <a href="editStudent.php?id=<?= $s['id'] ?>">
                    <button id="button1">Edit</button>
                  </a>
                     <a href="deleteStudent.php?id=<?= $s['id'] ?>" 
                        onclick="return confirm('Are you sure?')">
                       <button id="button2">Delete</button>
                     </a>
                  </td>
               </tr>
            <?php endforeach; ?>
        </table>
        <button id="viewStudentsButton" ><a href="addStudent.php" target="_blank">+ Add New Student</a></button>
    </div>
    <footer class="footer">
        <p>© 2025 University System</p>
    </footer>
</body>
</html>