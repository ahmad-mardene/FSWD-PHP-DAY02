<!DOCTYPE html>
<html>

<head>
    <title>Chrom or Mozila</title>
</head>

<body>
    <?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";

if(preg_match('/Chrome/i', "$viewer"))
{
$browser = 'Google Chrome'; 
}
else if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla";
}
echo("You are using $browser");
?>
</body>

</html>