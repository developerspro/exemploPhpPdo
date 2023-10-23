<?php 
class Layout { 

    private $header;
    private $footer;
    private $content;

    public function __construct(){
        $this->header = "header";
        $this->footer = "footer";
    }
   public function render($page){
        include $page.".php";
    }

    public function index($content){
        
        $this->render($this->header);
        $this->render($content);
        $this->render($this->footer);

    }
}