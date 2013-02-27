<?php
header('Content-disposition: attachment; filename=Gossip_Menu.pdf');
header('Content-type: application/pdf');
readfile('pdf/gossip.pdf');
?>