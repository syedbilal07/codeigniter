<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>CodeIgniter Internationalization Example</title>
</head>

<body>
<?php
echo form_open('/lang');
?>

<select name = "language" onchange = "javascript:this.form.submit();">
    <?php
    $lang = array('english'=>"English",'french'=>"French",'german'=>"German");

    foreach($lang as $key=>$val) {
        if($key == $language)
            echo "<option value = '".$key."' selected>".$val."</option>";
        else
            echo "<option value = '".$key."'>".$val."</option>";
    }

    ?>

</select>

<br>

<?php
form_close();
echo $msg;
?>

</body>

</html>

