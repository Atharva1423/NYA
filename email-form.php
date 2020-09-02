

<?php
    $myPDO = new PDO('sqlite:/database/email-form.db');

    if ( !$myPDO ){
    	print('NOT CONNECTED')
} else {
    	print('CONNECTED')
}
?>