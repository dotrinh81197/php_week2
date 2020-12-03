<?php
include_once "Model/human.php";
include_once "Services/Human-Resource-Management.php";

use Services\EmployeeManager;
use Model\Employee;

$employee = new EmployeeManager;
$trinh = new Employee('Trinh', " 8 - 11 - 97", 'Huế', 'CEO');
// thêm 1 nhân sự 
$employee->addEmployee($trinh);

// thêm 1 nhân sự 
$vu = new Employee('Vu', " 8 - 2 - 97", 'Huế', 'p.CEO');
$employee->addEmployee($vu);
// thêm 1 nhân sự 
$ychi = new Employee('ychi', " 8 - 1 - 94", 'Huế', 'Staff');
$employee->addEmployee($ychi);
$employee->showListEmployee($employee);

// xóa 1 nhân sự
echo 'Mảng đã xóa:';
echo "<pre>";
print_r($employee->removeEmployee(1));
