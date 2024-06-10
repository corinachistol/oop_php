





# OOP / PHP

 !!! PHP > Java, TypeScript, C#, C++, ...
 !!! PHP > Angular, Vue, ...

 > class / object (instance)   +
 > namespacing
 > static + /non-static
 > properties / methods    +
 > access modifiers
 > magic methods

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