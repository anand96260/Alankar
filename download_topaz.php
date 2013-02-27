<?php
header('Content-disposition: attachment; filename=Topaz_Menu.pdf');
header('Content-type: application/pdf');
readfile('pdf/topaz.pdf');
?>