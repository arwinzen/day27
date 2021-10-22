<!DOCTYPE html>
<html>
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
    
  <?php
  include "db_sql.php";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  // echo $fname;
  // echo $lname;

  function checkEmp($_fname, $_lname, $_conn){
    // $sql_check_emp = "SELECT * FROM employees WHERE fname = '$_fname' AND lname = '$_lname' LIMIT 1";
    $sql_check_emp = "SELECT * FROM employees WHERE emp_fname = '$_fname' AND emp_lname = '$_lname'";
    $sql_insert_emp = "INSERT INTO employees(emp_fname, emp_lname) VALUES('$_fname','$_lname')";
    $sql_insert_att = "INSERT INTO attendance(emp_id, att_clockin) SELECT emp_id, NOW() FROM employees WHERE emp_fname = '$_fname' AND emp_lname = '$_lname'";

    $result = $_conn->query($sql_check_emp);
    // print_r($result);
    if ($result){
      // if employee is in db
      if($count = $result->num_rows){
        // echo '<p>', $count, '</p>';
        
        if ($_conn->query($sql_insert_att) === TRUE) {
          echo "New attendance record created successfully";
        } else {
          echo "Error: " . $sql_insert_emp . "<br>" . $_conn->error;
        }
      } else {
          echo "Person doesn't exist"."<br>";
          if ($_conn->query($sql_insert_emp) === TRUE) {
            echo "New employee created successfully"."<br>";
            if ($_conn->query($sql_insert_att) === TRUE) {
              echo "New attendance record created successfully"."<br>";
            } else {
              echo "Error: " . $sql_insert_emp . "<br>" . $_conn->error;
            }
          } else {
            echo "Error: " . $sql_insert_emp . "<br>" . $_conn->error;
          }
      }
    } 
  }


  if($fname && $lname){
    checkEmp($fname, $lname, $conn);
  }

  ?>
  <br>
  <pre><a href="javascript:history.back()">Back to previous page</a></pre>
  </body>
</html>