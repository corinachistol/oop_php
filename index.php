<?



class Style {
    //properties
    public $background  ;
    public $color ;
    public $padding;
    public $margin;


    //contructor
    public function __construct($background, $color, $padding = "10px", $margin = "10px") {
        $this->background = $background;
        $this->color = $color;
        $this->padding = $padding;
        $this->margin = $margin;
    }

    public function toCSS() {
        return "
            background: {$this->background};
            color:      {$this->color};
            padding:    {$this->padding};
            margin:     {$this->margin};
        ";
    }

}
?>

<? $style1 = new Style("black", "white", "20px", "10px") ?>
<? $style2 = new Style("orange", "black") ?>





<div style="<?= $style1->toCSS() ?>">ELEMENT 1</div>
<div style="<?= $style2->toCSS() ?>">ELEMENT 2</div>















<!-- // class User
// {
//     public $username = 'Johny';
//     public $isOnline = true;

//     public function printInfo()
//     {
//         print ("<p>" . $this->username . "</p>");
//     }
// }

// // create a few instances
// $user1 = new User();
// $user2 = new User();
// $user3 = new User();

// $user1->printInfo();
// $user2->printInfo();
// $user3->printInfo(); -->
