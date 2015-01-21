<?php
require_once '../app/core/Controller.php';

class Test extends Controller {
    
    public function r ($test = '') {
        echo 'one '.$test;
    }
    
    public function test ($test = 'empty argument ;)')
    {
        echo $test;
    }
    
}