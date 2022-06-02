<!doctype html>
<html>
    <head>
        <title> student registration form </title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="" method="post" enctype="multipart/form-data">  
  
 First name:         
 <input type="text" name="firstname" size="15"/> <br> <br>   
Last name:      
  <input type="text" name="lastname" size="15"/> <br> <br>  

  Gender :  <br>
  <input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<br> <br>

    
Phone number:
  <input type="text" name="phone" size="9"/> <br> <br>  
Address:
  <br>  
  <textarea cols="80" rows="5" value="address">  
  </textarea>  <br> <br>  
  Email:  
  <input type="email" id="email" name="email"/> <br>    
  <br> <br>  



  
  <button type="submit" name="submit"> Submit </button>
  </form>  

  <?php
    $first_name = $_POST["firstname"];
    $name_pattern= "/^[a-z]+$/i";
    echo preg_match($name_pattern, $first_name);
    echo "<br>";
    $last_name =$_POST["lastname"];
    echo preg_match($name_pattern, $last_name);

    if(isset($_POST["gender"])){
        echo "<br>radiobutton selected<br>";
    }else{
        echo"<br>please select radiobutton<br>";
    }

    $number = $_POST["phone"];
    $number_pattern="/\d{9}/";
    echo preg_match($number_pattern,$number);
    echo "<br>";
    $email=$_POST["email"];
    $email_pattern="/^[a-z]+[A-Z0-9_\-.]*@[a-z]+(\.)[a-z]{2,3}$/";
    echo preg_match($email_pattern, $email);

  ?>
    </body>
</html>