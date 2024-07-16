





# OOP / PHP

 !!! PHP > Java, TypeScript, C#, C++, ...
 !!! PHP > Angular, Vue, ...

 > class / object (instance)   
 > namespacing
 > static  /non-static
 > properties / methods    
 > access modifiers
 > magic methods
 > encapsulation

 > abstractions 
 > inheritance
 > abstract classes
 > interfaces
 > traits
 
 > overriding
 > overloading
 > polymorphism

 > SOLID
 > design patterns
 > packages / PSR
 > composer




 RULE1:
     xxx.php : function, variable, classes, structure -> logic, 
        !!!! NEVER CLOSE THE TAG
 
 RULE2: use closing tag only in template file




index,php
    |
    +---- include
             ^
             |
             +--- lib.php
                |
                <?
                  ...
                  header()
                  cookies()
                  ...
                
                Cind lipeste tag- ul de inchidere, serverul singur hotaraste unde inchide file-ul


 class:
  > box / container (static) - grouping properties and methods
  > blueprint for creating objects/ instances


> static
   UserOne         +-----> class   
        |          |
  +----------------+--+
  |    $username = ...|
  |    $is_online= ...|
  |    printInfo() ...|
  +-------------------+

   UserTwo         +-----> class   
        |          |
  +----------------+--+
  |    $username = ...|
  |    $is_online= ...|
  |    printInfo() ...|
  +-------------------+



HW1: 
 create two files 
 index.php -> main file
 lib.php -> library
   |
   declare a class names Post:
    title,body.author, publishedAt, ... 5-7 properties
    method: 
        renderAsHTML() -> return the HTML equivalnt of the post
        renderAsXML()  -> retrun  the XML equivalnt of the post
        renderAsJSON()  -> retrun  the JSON equivalnt of the post











## lesson2

Atunci cind propr unei clase sutn definite cu "static", aceste props apartin clasei si pot fi accesate asa : <?= Style::$background?> or static::$background

Cind propr sunt definite cu public, ele nu mai apartin clasei, ci obiectului insine creat:
-Mai intii trebuie creat un obiect cu acel blueprint:  $style = new Style()
-Apoi utilizam propr de care avem nevoie: $style1->background


__construct() ne permite sa customizam obiectul




Style
    |
+------------------------------+
|                              |
|                              |   
|                              |   
|                              |    
|                              | --- new Style() ---> {...}  --> contructor -> (..)
|                              |          |                        ^   
|                              |          +---- $this -------------+
|                              |            
+---+--------------------------+            
    |                                       
    blueprint                               ^
    |                                       |
  +-----------------------+                 |
  |                       |                 |
  |  $background          |                 |
  |  $color               |+----------------+
  |  $padding             |+----------------+
  |                       |+----------------+
  |                       |
  |                       |
  +-----------------------+





   $style1->toCSS()

   HW1: 
      define class Profile()
                    | name,avatart
      
      define a conctructor
      define a toHTML() render in html the structure

      create a few profile object and render on the page


## ENCAPSULATION P2_C
> access modifier
> get/set


+----------+
|   unit ----- getUnit() --->
|   unit   |
|   unit  <--- setUnit(unit) ----
+----------+


## lesson3

4link->text = "..."
        |
        +------------ set value --->  __set($name, $value)
                                  |                v
print($link->text)                |         private $text
              ^                   |                ^
              |                   |                |
              +------ get value ---- __get($name) -+
                                  |
                                  |
                                  |  __toString()
                                          |
                            <-------------+

  HW2: impelement __isset() so it returns true only if link has a non empty text and non empty url;
                          ^
                          |
                          iset($link)








## Inheritance lesson 4

> DRY - don't repeat yourself
> Families of Classes
> Abstraction

> Polymorphism
> SOLID




------------------------------------------------












# VSCODE
php executable not found




  vscode <------------> extension (php) <---- config ------> ~php -----> docker exec... ----->CONTAINER
    ^                                           ^
    |                                           |
    v                                           +---- global
    index.php                                   |
                                                +---- user
                                                +--- profile
                                                        |
                                                        +--- setting.json
                                                                |
                                                                +--- php.executablePath
                                                                              |
                                                                              +--- 1. make shortcut ---> container
                                                                              +--- 2. install locally php 8.3 & copy path 
                                                +--- project



  Item (Parent/SuperClass)
   |
    +--- name     
    +--- image     
    +--- price
-------------------------
    ^
    |
    extends
    +---------------+      
    |               | 
    Food          Drink   (Subclassess / Derived/ Child)
    |               |
    +--- wigth      +--- volume




HW1: Add another product named DeliveryServies + improvise, test



















## Home Appliances / e-shop        lesson6_a

> advanced OOP
> code splitting / namespace
> encapsulation
> typing
> inheritance
> association


# lesson7
+---------------------------------------------------------+
|                                                         +---- encapsulation (private)
|(Abstract) Appliance                                     |
|              |                                          |
|              +--- id      <-- __construct()    <-------------+  
|              +--- name    <--+                          |    |
|              +--- price   <---                          |    |
+---------------------------------------------------------+    |
                                                               |
-------------^---------|------------------ inheritance         |
      ^      |set      v get                                   |
      |                                                        |
  (C) TV                                                       |
      |                                                        |
      +-- diagonal      <---- __construct()                    |
                              parent:: __construct()-----------+

                                $this->diagonal = $diagonal;



(C) Money
      |
      +-- amount
      +-- currency



index.php
  ^
  |
  +-- src/TV.php
  |         ^
  |         |
  |         +-- ./src/Appliance.php
  |
  |
  +-- src/Appliance.php
  +-- src/Money.php











(C) Length
      |
      +-- value
      +-- unit


type declarations 
enumerations = ne permite sa cream un set de constante din care putem alege un anumit tip de date














## lesson 8
association (objects)



      tv (TV)
      |
      +-- id    (int)
      +-- name  (string)
      +-- price (Money)
      |       |
      |       +-- amount 
      |       +-- currency 
      |
      --------
      |
      +-- diagonal (Length)
              |
              +-- value (int|float)
              +-- unit(Enum)














# value vs references
> copy, value, clone

int, float, boolean, string...







original        string
  |               v
+--------------------+
|               "abc" |
+--------------------+


copy              string
  |               v
+--------------------+
|               "Abc" |  <---- $copy[0] = 'A';
+--------------------+
                  |
                  v
                  str_replace('b', 'B', $copy)
                  |
                  v
                string
                  v
+--------------------+
|               "ABc" |  
+--------------------+









                    $argument (1001) -------> [1001]
                          |
                      $original                  ^
                          |                      |
                          |                      | 
increment                 |   -------------------+
    |                     v  /
+---+----------------(&$value)-----+
|                                 |
|                         |       |
|                         v       |
|                     $value++    |  (1001)
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                       return    |
|                          |      |
+--------------------------|------+
                           |
                           copy
                           |
                           v
                           $result (1001)




    

                    $argument (1000) -------> [1000]
                          |
                        $copy                    
                          |                      
                          |                      
increment                 |   +-------------> [1001] 
    |                     v / 
+---+----------------($value)-----+
|                                 |
|                         |       |
|                         v       |
|                     $value++    |  (1001)
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                       return    |
|                          |      |
+--------------------------|------+
                           |
                           copy
                           |      -------- [1001]
                           v    /
                           $result






                    $argument (1000) -------> [1000]
                          |
                        copy                      ^
                          |                       |
                          |                       |
&increment                 |   +------------------+  
    |                     v / 
+---+----------------($value)-----+
|                                 |
|                         |       |
|                         v       |
|                     $value++    |  
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                          |      |
|                       return    |
|                          |      |
+--------------------------|------+
                           |
                          &                       ^
                           |      -----------------
                           v    /
                           $result




## lesson9

$box_one        Box
     |           |
+----+----------------+
|  $value=100         |
+----+----------------+
     |
$box_ref

 
// $numbers = [10, 20, 30];

// //pass by value
// $numbers_copy = $numbers;

// $numbers_copy[] = 40; //push  like in js

// var_dump($numbers);
// var_dump($numbers_copy);

    // class Box {
    //     public $value;

    //     public function __construct($value) {
    //         $this->value = $value;
    //     }

    // }

    // // objects in PHP are passed by reference 
    // $box_one = new Box(100);
    // $box_ref = $box_one;

    // $box_ref->value = 200;

    // var_dump($box_one);
    // var_dump($box_ref);



> namespace

index.php
    ^
    |
    +--- / Length.php
    |          |
    |          +-- Length
    |                 |
    |                 +-- Units (enum)
    |                 +-- Length (class)
    |
    |
    +--- / Volume.php
              |
              +-- Volume
                    |
                    +-- Units (enum)
                    +-- Volume (class)
