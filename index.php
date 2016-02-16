<?php
echo phpinfo();
echo testBrach("MyTest");
//test
function testBrach($branch){
    return "<br>Branch Name is".$branch."<br>";
}
?>