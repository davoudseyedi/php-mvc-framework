<?php
    class Pages extends Controller {
        public function __construct()
        {

        }
        public function index(){
            if(isLoggedIn()){
                redirect('posts');
            }
            $data = [
                'title' => 'Custom MVC',
                'description'=> 'Simple Social Network built on the Custom MVC PHP framework'
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About US',
                'description'=> 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }