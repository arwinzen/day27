<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>EMployee Attendance</title>
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
  $id = $_GET['id'];
//   echo $id;
  $sql_disp_att = "SELECT att_clockin FROM `attendance` WHERE emp_id = '$id'";
  $result = $conn->query($sql_disp_att);

  if($id){
      if($result){
        if($count = $result->num_rows){
            // echo "<p>". $count . "</p>";

            while($row = $result->fetch_object()){
                echo "<pre>". $row->att_clockin . "</pre>";
            }
        }

      } else {
        echo "Error: " . $sql_disp_att . "<br>" . $conn->error;
      }
  }

  ?>
    <br>
    <a href="javascript:history.back()">Back to previous page</a>
  </body>
</html>