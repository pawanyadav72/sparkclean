<!DOCTYPE html>
<html>
<head>
<title>Book Cleaning Service</title>
<style>
    body { font-family: Arial; background:#eef2f3; padding:20px; }
    .container { background:white; width:400px; margin:auto; padding:25px; border-radius:10px; }
    input, select { width:100%; padding:10px; margin:10px 0; }
    button { background:#28a745; padding:10px; width:100%; color:white; border:none; }
</style>
</head>
<body>

<div class="container">
    <h2>Book Cleaning Service</h2>
    <form action="backend/book_service.php" method="POST">
        <label>Service Type</label>
        <select name="service_type">
            <option>Home Cleaning</option>
            <option>Bathroom Cleaning</option>
            <option>Kitchen Cleaning</option>
            <option>Deep Cleaning</option>
        </select>

        <label>Date</label>
        <input type="date" name="date" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <button type="submit">Book Now</button>
    </form>
</div>

</body>
</html>