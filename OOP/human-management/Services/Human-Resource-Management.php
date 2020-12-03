<?php

namespace Services;

class EmployeeManager
{
    protected $employee;

    public function __construct()
    {
        $this->employee = [];
    }
    // thêm 1 nhân sự
    public function addEmployee($employee)

    {
        $this->employee[] = $employee;
    }
    // lấy về  1 nhân sự
    public function getEmployee()
    {
        return $this->employee;
    }
    //Hiển thị danh sách nhân sự
    public function showListEmployee($employee)
    {
        echo "<pre>";
        print_r($this->employee);
        echo '</pre>';
    }
    // xóa 1 nhân sự
    public function removeEmployee($key)
    {
        unset($this->employee[$key]);
        return $this->employee;
    }
}
