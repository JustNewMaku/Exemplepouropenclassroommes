<?php 
if(isset($_GET['msg']) && ($_GET['msg']==hash('sha512','Truth'))){
 echo 'vous avez accès à la vérité';
}else{
 echo 'vous n\'avez pas accès à la vérité';
}
?>
