<?php
header('Content-disposition: attachment; filename=Tiffinys_Menu.pdf');
header('Content-type: application/pdf');
readfile('pdf/tiffinys.pdf');
?>