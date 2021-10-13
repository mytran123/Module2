<?php
include_once "../models/Employee.php";

class EmployeeManager
{
    private $employees;
    private $path = __DIR__ . '/employee.json';

    public function __construct()
    {
        $this->employees = $this->load();
    }

    public function getAllEmployees()
    {
        return $this->employees;
    }

    public function storeEmployees($employee)
    {
        array_push($this->employees,$employee);
        $this->save();
    }

    public function getEmployeeById($id)
    {
        return $this->employees[$id];
    }

    public function save()
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($this->employees,$dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data)
    {
        $employees = [];
        foreach ($data as $e) {
            $employee = new Employee($e['firstName'],$e['lastName'],$e['birthDate'],$e['address'],$e['jobTitle']);
            $employees[] = $employee; // array_push
        }
        return $employees;
    }

    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }
}