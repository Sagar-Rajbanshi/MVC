<?php
class homecontroller{
    function __construct()
    {
        
    }       
    function home(){
        include("./model/index.php");
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }
    function about(){
        echo('about');
    }
}
?>