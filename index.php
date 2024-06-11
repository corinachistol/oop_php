<?
require_once 'lib.php';

Post::renderAsHTML();
print("<hr>");
Post::renderAsJSON();
print("<hr>");
Post::renderAsXML();
