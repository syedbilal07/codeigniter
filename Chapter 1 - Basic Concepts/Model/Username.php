<html>
<head>
    <title>Basic Concepts - Models</title>
</head>
<body>
<?php
class Username extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function write(){
        echo "This Is Model Method";
    }
}
?>
<h1>This Is Model File</h1>
</body>
</html>