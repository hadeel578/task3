
<?php

//$userage = 25;  
//$userrole = "admin";

//if ($userage >= 18) {
  //  echo "you can access the system";
    
    //switch($userrole) {
      //  case "admin":
        //    echo " you have admin access";
          //  break;
       // case "user":
         //   echo " you have user access";
           // break;
       // default:
         //   echo " you do not have role";
           // break;
    //}
//} else {  
  //  echo "you are not old enough to access the system";
//}



$rr = ["osama", "ali", "mohamed", "Khalid"];

function myarray($rr) {
    foreach ($rr as $name) {
        if (strlen($name) == 5) {
            print_r($name);
            break;
        }
    }
}

$g = myarray($rr,"<br>");
$h = array($g)

?>
