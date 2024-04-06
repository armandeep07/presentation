<?php
include 'dbinfo.php';

$sql_story = "SELECT * FROM our_story";
$result_story = mysqli_query($con, $sql_story);
$row_story = mysqli_fetch_assoc($result_story);



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

    <p id="title">About US</p>
    

    </main>
    <section>
        <h1>Our Story</h1>
        <p><?php echo $row_story['content'] ?></p>
    </section>
   
    <footer>
        Armandeep Kaur : 202106382
    </footer>
</body>
</html>
