<?php


namespace app\controller;


use app\model\DBConnection;

class StudentController
{
    public function show()
    {
        $dbConnect = new DBConnection();
        $students = $dbConnect->readDataFromJson();
        include 'src/view/list.php';
    }

    public function getStudentById($id)
    {
        $dbConnect = new DBConnection();
        $students = $dbConnect->readDataFromJson();
        foreach ($students as $student) {
            if ($student['id'] == $id) {
                return $student;
            }
        }
    }

    public function edit()
    {
        $dbConnect = new DBConnection();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $student = $this->getStudentById($id);
            include_once "src/view/edit.php";
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['name'] = $_REQUEST['name'];
            $data['age'] = $_REQUEST['age'];
            $data['address'] = $_REQUEST['address'];
            $students = $dbConnect->readDataFromJson();
            foreach ($students as $key => $student) {
                if ($student['id'] == $_REQUEST['id']) {
                    $students[$key] = $data;
                    break;
                }
            }
            $dbConnect->saveData($students);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $dbConnect = new DBConnection();
        $students = $dbConnect->readDataFromJson();
        $id = $_REQUEST['id'];
        foreach ($students as $key => $student) {
            if ($student['id'] == $id) {
                unset($students[$key]); // xoá phần tử trong mảng $students
            }
        }
        $students = array_values($students); // sắp xếp lại vị trí key của mảng
        $dbConnect->SaveData($students);
        header("Location: index.php");
    }

    public function add()
    {
        $dbConnect = new DBConnection();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/add.php";
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['name'] = $_REQUEST['name'];
            $data['age'] = $_REQUEST['age'];
            $data['address'] = $_REQUEST['address'];
            $students = $dbConnect->readDataFromJson();
            array_push($students, $data);
            $students = $dbConnect->saveData($students);
            header('location:index.php');
        }
    }

    public function search()
    {
        $dbConnect = new DBConnection();
        $students = $dbConnect->readDataFromJson();

        if (!empty($_REQUEST['s'])) {
            $k = false;
            foreach ($students as $key => $student) {
                if ($student['name'] == $_REQUEST['s']) {
                    $k = $key;
                    break;
                }
            }
            if ($k !== false) {
                $students = [$students[$k]];
            }
            else {
                $students = '';
            }

        }
        include 'src/view/list.php';
    }


}
