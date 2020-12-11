<?php

namespace app\model;
class DBConnection
{
    public function readDataFromJson(){
        $students = json_decode(file_get_contents(__DIR__.'/db.json'),true);
        return $students;
    }
    public function saveData($students){
        $students = file_put_contents(__DIR__.'/db.json',json_encode($students));
        return $students;
    }
}