<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body { font-family: Arial; background:#f0fbf0; padding:20px; }
.card { width:250px; padding:20px; margin:20px; background:white; border-radius:10px; display:inline-block;
        box-shadow:0 0 10px #aaa; text-align:center; }
a { text-decoration:none; color:black; }
</style>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>
<h3>Spark Clean Dashboard</h3>

<div class="card"><a href="book.php">🧹 Book Cleaning Service</a></div>
<div class="card"><a href="my_bookings.php">📄 My Bookings</a></div>
<div class="card"><a href="profile.php">👤 Profile</a></div>
<div class="card"><a href="backend/logout.php">🚪 Logout</a></div>

</body>
</html>