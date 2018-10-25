<?php
class IndexController {

    private $model;

    function __construct( $model_obj ) {
        $this->model = $model_obj;
    }

    public function index() {
        $data['generic'] = $this->model->index();
        view("index",$data);
    }

    public function users(){
        $data['generic'] = $this->model->generic();
        $data['users'] = $this->model->getusers();
        view('users',$data);
    }

}