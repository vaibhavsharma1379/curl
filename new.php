<?php 
require_once "./function/function.php";
if(isset($_POST["submit"])){
   $recordData= createRecord("https://reqres.in/api/users");
   echo "<p>Repository created successfully. </p>";
   echo "<a href='show.php?email=".$recordData["email"]."'>Show</a>";
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
</head>

<body>
    <h1>New Record</h1>
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname">
            <label for="lname">LastName</label>
            <input type="text" name="lname" id="lname">
            <label for="url">Avtar Url</label>
            <input type="text" name="url" id="url">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <button name="submit" value="submit">Submit</button>
        </form>
    </main>
</body>

</html>