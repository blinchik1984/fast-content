<?php


namespace Content\Controllers;


use AdServer\Engine\Components\Engine;

class MyController
{
    public function index() {
        return Engine::getContainer()->get('contentService')->getContent();
    }
}