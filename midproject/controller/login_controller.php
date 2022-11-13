<html>
  <body>

      
  </body>
      
     </html>

<?php
$errorCount=0;

    if(isset($_POST["username"])||(isset($_POST["password"])))
      {

        $data = file_get_contents("../data.json");
        $logindata = json_decode($data);

        foreach($logindata as $object)
        {
            if($object->Username==$_POST["username"] && ($object->Password == $_POST["password"]) )
            { 
              echo "Login Successfull <br>";
              return;
              }
             
            }
            echo "invalid username or Password";
        }
        
        
       
      
?>