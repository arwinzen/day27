<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Admin Login</title>
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
    
    <?php
       include "db_sql.php";
       $att_time = $_POST['checkin'];
       $id = $_GET['id'];
    //    echo $id;
       $sql = "UPDATE attendance SET att_clockin='$att_time' WHERE att_id = '$id'";
       $result = $conn->query($sql);

       if($att_time){
         if($result){
            echo "Employee checkin time updated";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
       }

    //    if($att_time){
    //     if($result){
    //       if($count = $result->num_rows){
    //           // echo "<p>". $count . "</p>";
  
    //           while($row = $result->fetch_object()){
    //               echo<<<HEREDOC
    //                 <form action="change.php" method="POST">
    //                   <input value="$row->att_clockin" readonly name="checkin">
    //                   <input type="submit"> 
    //                 </form>
    //               HEREDOC;
    //               // echo "<pre>". $row->att_clockin . "</pre>";
    //           }
    //       }
  
    //     } else {
    //       echo "Error: " . $sql_disp_att . "<br>" . $conn->error;
    //     }
    // }
    ?>
</body>
</html>