<?php
        ob_start();
//include header.php file
include('header.php');
?>

<?php

    /* include cart-template */
        include('Template/_cart-template.php');
    /* !include cart-template */

    /* include banner adds */
        include('Template/_banner_adds.php');
    /* !include banner adds */

?>


<?php
//include footer.php file
include('footer.php');
?>
