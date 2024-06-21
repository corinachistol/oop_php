<?

class Link {
    private $text;
    private $url;
    public function __construct($text, $url) {
        $this->__set("text", $text);
        $this->__set("url", $url);
    }
    public function __set($name, $value){
        if($name == "text") 
            if($value != "")
                $this->text = $value;
            else 
                die("Cannot leave {$name} empty");
        else if($name == "url")
             if($value != "")
                $this->url = $value;
            else 
                die("Cannot leave {$name} empty");
        else 
            die("ERROR: Unknown property {$name}");
    }

    public function __get($name) {
        if($name == "text") return $this->text;
        else if($name == "url") return $this->url;
        else die("ERROR: Unknown property {$name}");
    }

    public function __tostring() {
        return "<a href='{$this->url}'>{$this->text}</a>";
    }

    public function __isset($name){
        if ($name == "text" && !empty($this->text))
            if($name == "url" && !empty($this->url))
                return true;
            else false;
    }
   

    


}
?>
<?
        //HW1: what if is text is multiple spaces, string functions check!
        
        $link1 = new Link("php","https://php.net");
        var_dump(isset($link1) ) ;

    
?>
<!-- 
<a href="<?=$link1->url?>"><?= $link1->text?></a> -->

<p>To read more about PHP, click <?=$link1?></p>
















