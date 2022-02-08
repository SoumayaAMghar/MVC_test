<?php

class Posts extends Controller
{
  public function __construct()
  {
    $this->postModel = $this-> model('Post'); //new Post
  }

  public function index()
  {
    echo 'posts / index';
  }

  public function edit($id)
  { 
    $data = [
      'title'=> 'Posts/edit'
    ];
    $this->view('Posts/edit', $data);

  }  

}

?>