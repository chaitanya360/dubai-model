<!-- <?php header( 'Location: /index.html' ) ;  ?> -->

<?php
function layout($page_id) {
    switch($page_id) {
        default: //Default, ie when the page_id does not match with predefined cases
            echo '<p class="red">The page was not found. Showing Home page instead</p>';
        case '': //When it is null
        case 'dubai':
            header( 'Location: /index.html' );
            break;
        case 'ny':
            header( 'Location: /index.html' );
            break;
        case 'paris':
            header( 'Location: /index.html' );
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Single index.php PHP script to load different page using URL Variable</title>
</head>
<body>
    <p style="text-align: center;"><a href="diff-page.php?page=home">Home Page</a> | <a href="diff-page.php?page=about">About Page</a> | <a href="diff-page.php?page=contact">Contact Page</a></p>
<?php
$page_id = $_GET['page']; //Get the request URL
layout($page_id); //Call the function with the argument
?>
</body>
</html>