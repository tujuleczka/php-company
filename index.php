<?php

require_once 'class.php';

$carpenter = new JobPosition();
$carpenter->setNameJobPosition('Stolarz');
$carpenter->setSalary(3100);

$employee1 = new Employee();
$employee1->setNameEmployee('Adam');
$employee1->setSurnameEmployee('Małysz');
$employee1->setJobPosition($carpenter);

$departmentA = new Department();
$departmentA->setNameDepartment('Stolarka');
$departmentA->setTypeDepartment('Finanse');
$departmentA->addEmployee($employee1);

$company = new Company();
$company->setNameCompany('BudoDach');
$company->addDepartment($departmentA);

echo 'Pracownicy firmy "' . $company->getNameCompany() . '": ' . PHP_EOL;
foreach ($company->getDepartments() as $department) {
    foreach ($department->getEmployees() as $employee) {
        echo 'Dział: ' . $departmentA->getNameDepartment() . ' Imie: ' . $employee->getNameEmployee() . ' Pensja: ' . $employee->getJobPosition()->getSalary();
    }
}