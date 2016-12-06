<!> TODO: This page should be deleted once the project is done, for now is an
  adequate example of PHP. </!>

<!DOCTYPE html>
<html>
    <head>
        <title>Current</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="site.css">
    </head>
    <body>
    <?php
    function helloXTimes($arg=10) {
      for ($x = 0; $x < $arg; $x++) {
        echo "Hello, World! <br>";
      }
    }
      helloXTimes();
    ?>
        <div>
            <h1 class="centered sansSerif">Current</h1>
            <div>
                <p> This is a WIP website which is a project for CSC 412 at SFSU. Eventual goal is something similar to <a href=http://strml.net> this. </a> </p>
            </div>
        </div>
    </body>
</html>
