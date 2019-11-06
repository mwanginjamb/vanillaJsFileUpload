<?php
/*
    Written by francnjamb@gmail.com
    A demo just showing how post data from the js frontend looks like.
*/
print '<pre>';


#Get the post data -- none multipart
print_r($_POST);


print '<hr>';
#Get the files array
print_r($_FILES);

?>