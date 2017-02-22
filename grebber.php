 <?
$html = file_get_contents('https://www.instagram.com/accounts/login/?force_classic_login');
$startcode = explode('<input type="hidden" name="csrfmiddlewaretoken" value="' , $html );
$endcode = explode('"/>' , $startcode[1] );
$token = $endcode[0];
echo "Token:$token"; 
