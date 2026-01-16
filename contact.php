<?php include 'includes/header.php'; ?>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us</h1>
<form method="get" action="contact_Action.php">
    <label>How many Froot Rollups?</label>
    <input type="text" name="fruitQuant" id="fruitQuant" placeholder="enter number">
    <label>What flavor?</label>
    <input type="text" name="fruitFlav" id="fruitFlav" placeholder="enter flavor">
    <input type="submit" name="submit">
</form>



</body>
</html>
<?php include 'includes/footer.php'; ?>
