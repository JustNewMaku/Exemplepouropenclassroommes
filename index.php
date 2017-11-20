<?php
//Via vim

$msg = hash('sha512','Truth');

header('Location:'.$_SERVEUR['DOCUMENT_ROOT'].'/Exemplepouropenclassroommes/code/index.php?msg='.$msg);
exit();

?>
