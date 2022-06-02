<!doctype html>
<html> 
    <head>
        <meta charset = "utf-8">
        <title> website </title>
    </head>
    <body>

    <form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
<input type="file" name="photo"/>
<button type="submit" name="ok"> Submit </button>
</form>
<?php
if (move_uploaded_file($_FILES["photo"]["tmp_name"], basename($_FILES["photo"]["name"])))
echo "Successfully uploaded.";
else
echo "Problem when uploading, try again.";
?>
                  
    </body>
</html>