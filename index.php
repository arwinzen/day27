<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Day 27 Tutorial</title>
 <link rel="stylesheet" href="">
 <style>
        *{ 
            padding: 0; 
            margin: 0; 
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif; 
            font-size: calc(1.5vh + 1vw + 1%); 
            line-height: 1.5;
        }
        body{ 
            overflow: auto; 
            min-height: 100vh; 
            width: 100%; 
            padding: 0.5rem 1rem;   
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <h3>Employee Attendance</h3>
    <pre><a href="admin.php">Admin Login</a></pre>
    <form action="action.php" method="POST" autocomplete="off">
        <label for="fname">First name : </label>
        <input type="text" name="fname" required autocomplete="off">
        <br>
        <label for="fname">Last name : </label>
        <input type="text" name="lname" required autocomplete="off">
        <br>
        <input type="submit" name="submit" value="HERE!">
    </form>
    
    <?php
       
    ?>
</body>
</html>