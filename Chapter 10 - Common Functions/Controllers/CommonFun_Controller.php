<?php
    class CommonFun_Controller extends CI_Controller
    {
        public function index()
        {
            set_status_header(200);
            echo "Is PHP v5.3 :". is_php('5.3'). "<br>";
            echo "Is Writable : ". var_dump(is_really_writable('./Form.php'))."<br>";

            echo config_item('language')."<br>";
            echo remove_invisible_characters('This is a test', 'UTF-8')."<br>";

            $str = '< This > is \' a " test & string';
            echo html_escape($str)."<br>";
            echo "is https : ". var_dump(is_https())."<br>";
            echo "is cli : ". var_dump(is_cli())."<br>";
            var_dump(function_usable('test')). "<br>"."<br>"."<br>";
            echo "Get Mimes ".print_r(get_mimes())."<br>";
        }
        public function test()
        {
            echo "Test Function";
        }
    }
?>