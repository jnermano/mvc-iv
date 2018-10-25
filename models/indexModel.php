<?php
class IndexModel{

    function __construct(){

    }

    public function index(){
        return $this->generic();
    }

    public function getusers(){
        $users = [
            ["name" => "John", "phone" => "4165094662"],
            ["name" => "Bivek", "phone" => "4165094662"],
            ["name" => "Tara", "phone"=> "9841564617"],
            ["name" => "Bijay", "phone"=> "9841886477"]
        ];
        return $users;
    }

    public function generic(){
        $data = [
            'title' => 'Index Controller Title',
            'content' => 'Simple MVC Framework is a simplest framework designed for beginners to learn MVC framework core.<br />
 Browse: <a href="http://'.$_SERVER['HTTP_HOST'].'/">http://'.$_SERVER['HTTP_HOST'].'/</a> for landing page<br />
 Browse: <a href="http://'.$_SERVER['HTTP_HOST'].'/index/users">http://'.$_SERVER['HTTP_HOST'].'/index/users</a> for listing users<br /><br />',
        ];
        return $data;
    }

}