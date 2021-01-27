<?php
//strip_tags
//word_wrap


$a = "hello <b>bangladesh</b>. very <i>beautiful</i> country";
echo $a;
echo "<br>";
echo strip_tags($a, "<b>");
echo "<br>";


$a = "hello <b>bangladesh</b>. very <i>beautiful</i> country";
echo $a."<br>";
echo wordwrap($a, 4, "<br>", true);


