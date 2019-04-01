<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>CodeIgniter Flashdata Example</title>
</head>

<body>
Flash Data Example
<h2><?php echo $this->session->flashdata('item'); ?></h2>
<a href = 'flashdata/add'>Click Here</a> to add flash data.
</body>

</html>