<?php

if ($toto = fopen('./files/test.php', 'w+')) {
    if (is_writable('./files/test.php')) {
        $msg = '<?php' . PHP_EOL;
        $msg .= '$html = "<!DOCTYPE html>";' . PHP_EOL;;
        $msg .= '$html .= "<html>";' . PHP_EOL;
        $msg .= '$html .= "<head>";' . PHP_EOL;
        $msg .= '$html .= "<meta charset=\"UTF-8\">";' . PHP_EOL;
        $msg .= '$html .= "<title>CGT !!!</title>";' . PHP_EOL;
        $msg .= '$html .= "</head>";' . PHP_EOL;
        $msg .= '$html .= "<body>";' . PHP_EOL;
        $msg .= '$html .= "<h1>Le titre ici !</h1>";' . PHP_EOL;
        $msg .= '$html .= "<p>Lorem ipsum dolor amet vexillologist portland lomo chicharrones swag la croix unicorn hoodie, deep v raw denim 8-bit bespoke franzen cronut locavore. Vinyl single-origin coffee occupy umami tofu. Fixie art party mixtape artisan authentic fashion axe.</p>";' . PHP_EOL;
        $msg .= '$html .= "</body>";' . PHP_EOL;
        $msg .= '$html .= "</html>";' . PHP_EOL;
        $msg .= 'echo $html;';
        fwrite($toto, $msg);
    }
    else {
        echo "Morche po";
    }
}

else {
    echo "File does exist";
}
fclose($toto);