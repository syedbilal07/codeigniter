<html>

<head>
    <title>Upload Form</title>
    <style>
        li{
            list-style-type:none;
        }
    </style>
</head>

<body>
<h3>Your file was successfully uploaded!</h3>

<ul>
    <?php
    $upload_data = "";
    ?>
    <?phpfor($upload_data):?>
    <li><?php echo $upload_data?></li>
    <?phpendforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
</body>

</html>