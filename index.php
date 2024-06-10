<?
    //user1
class UserOne {
    //properties 
    static $username = 'johny';
    static $isOnline = true;

    //method
    static function printInfo() {
        print("<p>".static::$username."</p>");
    }

}


//user2
class UserTwo {
    //properties
    static $username = 'marrry';
    static $isOnline = false;

    //method
    static function printInfo() {
        print("<p>".static::$username."</p>");
    }

}

///-----------------
UserOne::printInfo();
UserTwo::printInfo();