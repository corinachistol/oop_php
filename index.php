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


class Profile{
    public $name;
    public $email;
    public $image;
    public $bio;
    public $date_of_birth;
    public $last_login;
    public $account_status;

    public function __construct($name, $email, $bio, $image, $date_of_birth, $last_login, $account_status) {
        $this->name = $name;
        $this->email = $email;
        $this->bio = $bio;
        $this->image = $image;
        $this->date_of_birth = $date_of_birth;
        $this->last_login = $last_login;
        $this->account_status = $account_status;
    }

    public function toHTML() {
        return "
            <section style='display:flex; justify-content:space-around; width:400px; height:300px;'>
                <div>
                    <h3>{$this->name}</h3>
                    <em>{$this->bio}</em><br>
                    <p>{$this->date_of_birth}</p>
                    <small>{$this->email}</small><br>
                    <small>Last login:{$this->last_login}</small><br>
                    <small>Account Status:<b>{$this->account_status}</b></small>
                    
                </div>
                <div>
                    <img src={$this->image} width='100px' style='padding:10px' >
                </div>
            </section>
        ";
    }
}





?>

<? $profile1 = new Profile(
    "John Doe", 
    "jd@email.com", 
    'PHP Developer', 
    './avatar/avatar1.png',
    '05-01-1990',
    '01-06-2022',
    'suspended'
)?>
<? $profile2 = new Profile(
    "Jane Doe", 
    "jd@email.com", 
    'Content Creator, SMM', 
    './avatar/avatar.png',
    '15-10-1989',
    '01-06-2024',
    'active'
)?>
<div><?= $profile1->toHTML()?></div>
<div><?= $profile2->toHTML()?></div>

<!-- <? $style1 = new Style("black", "white", "20px", "10px") ?>
<? $style2 = new Style("orange", "black") ?> -->





<!-- <div style="<?= $style1->toCSS() ?>">ELEMENT 1</div>
<div style="<?= $style2->toCSS() ?>">ELEMENT 2</div> -->



















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
