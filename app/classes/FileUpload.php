<?php


namespace App\classes;


class FileUpload
{
    protected $image;
    protected $imageName;
    protected $directory;

    public function __construct($post=null){
       $this->image = $post;
    }

    public function index(){
//        print_r($_FILES);
        $this->imageName = $_FILES['image']['name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory );
        echo "File Uploaded";
    }




}