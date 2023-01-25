<?php
//entry point to the application
//include  the dependencies
require_once "init.php";
//to include external files in PHP we can use include, //include_once, require, and require_once
//require is for stuff you need 
//include can be less fatal 
//_once is to ensure things only are included once
new App;