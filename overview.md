





# OOP / PHP

 !!! PHP > Java, TypeScript, C#, C++, ...
 !!! PHP > Angular, Vue, ...

 > class / object (instance)   +
 > namespacing
 > static + /non-static
 > properties / methods    +
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
 > polymorphidm

 > SOLID
 > design patterns
 > packages /PSR
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
                                  