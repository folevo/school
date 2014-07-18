<?php
/**
 * Created by PhpStorm.
 * User: d.teteruk
 * Date: 17.07.14
 * Time: 18:53
 */

namespace School\HelloBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends  Controller{
    public function helloAction(){
        //return template hello
        return $this->render('SchoolHelloBundle:Hello:hello.html.twig');
}
}