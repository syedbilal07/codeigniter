<html>
<head>
    <title>Basic Concepts - Controllers</title>
</head>
<body>
<?php
class Test extends CI_Controller{
    public function index(){
        // Loading View From Views Folder
        $this->load->view('test');
    }
    public function hello(){
        // Loading Model From Model Folder
        $this->load->model('Username');
        // Loading Model Method
        $this->Username->write();
    }
    public function helper(){
        // Loading The Helper
        echo "Helper Function";
        $this->load->helper('url_helper');
    }
}

?>
</body>
</html>