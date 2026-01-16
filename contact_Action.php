<?php include 'includes/header.php'; ?>
<html>
<head>
    <title>Contact Us Action</title>
</head>
<body>
<h1>See your information Below:</h1>
<!-- Name: <?php  echo $_GET["name"]; ?> <br />
Email: <?php echo $_GET["email"]; ?><br />
Message: <?php echo $_GET["message"]; ?><br /> -->

<?php
/*
// Variable in PHP start with a $
// Data types are automatically assigned

$myFirstVariable = 5;
$anotherVariable = "Hello World!";

$num1 = 6;
$num2 = 7;

// Conditional statements (if/else/else if)
if($num1 > $num2){
    echo "num1 is bigger!";
}else{
    echo "num2 is bigger!";
} */

echo "<h2>You purchased " . $_GET["fruitQuant"] . "Fruit Rollups</h2><br/>";
echo "<h2>Your cost is " . $_GET["fruitQuant"] * 2 . " dollars</h2>";
echo "<h2>Your flavor is " . $_GET["fruitFlav"]  . " .</h2>";


?>

</body>
</html>
<?php include 'includes/footer.php'; ?>