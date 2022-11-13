<?php
if(isset($_POST["submit"])){
 
if(file_exists("../data.json")){
  $info=json_decode(file_get_contents("../data.json"));
 foreach($info as $userinfo)
 {
    if($userinfo->Name==$_POST["name"])
    {
     echo $_POST["name"]."Name already taken";
     return;
    }
   if($userinfo->Username==$_POST["username"])
   {
    echo $_POST["un"]." Username already taken";
    return;
   }
   if($userinfo->pnumber==$_POST["phone"])
   {
    echo $_POST["phone"]." Already registered by an other user";
    return;
   }
 }
    


$formdata = array(
          'Name'=> $_POST["name"],     
	      'Username' => $_POST["username"],
	      'dob' => $_POST["dob"],
	      'Password'=> $_POST["password"],
        'pnumber'=>$_POST["phone"]);

 $prevdata = file_get_contents("../data.json");
 $newdata= json_decode($prevdata);
 $newdata[]= $formdata;

       $jsondata= json_encode($newdata, JSON_PRETTY_PRINT);

       if(file_put_contents("../data.json",$jsondata))
       {
        echo "Data saved successfully";
       }
       else 
       echo "No data saved"; 
    
  }


}
?>
