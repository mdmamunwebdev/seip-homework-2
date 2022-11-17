<?php

namespace App\classes;
use App\classes\Database;

class BlogCategory {


    private $sql, $queryResult, $database, $row, $returnRow=[];


    public function __construct()
    {
        
    }

    public function getAllCategory() {
        $this->sql = "SELECT * FROM blog_categories";
        $this->database = new Database();
        $this->queryResult = mysqli_query($this->database->dbConnect(), $this->sql);
        
        if( $this->queryResult ) {

            while( $this->row = mysqli_fetch_assoc($this->queryResult) ) {
           
                array_push($this->returnRow, $this->row);
    
            }

        }
        

        return $this->returnRow;

    }
}