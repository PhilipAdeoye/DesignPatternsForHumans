<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Composite;

require_once 'BusinessUnit.php';
require_once 'SalariedEmployee.php';

$sally = new HourlyEmployee();
$ahmed = new HourlyEmployee();

$ingvar = new SalariedEmployee();
$zubairu = new SalariedEmployee();

echo 'Sally, an hourly, gets paid: ' .$sally->get_monthly_pay() .PHP_EOL;
echo 'Ahmed, an hourly, gets paid: ' .$ahmed->get_monthly_pay() .PHP_EOL;

echo 'Ingvar, a salaried, gets paid: ' .$ingvar->get_monthly_pay() .PHP_EOL;
echo 'Zubairu, a salaried, gets paid: ' .$zubairu->get_monthly_pay() .PHP_EOL;
echo PHP_EOL;

$product_design_team = new Team();
$product_design_team->add_employee($sally);

$developer_team = new Team();
$developer_team
    ->add_employee($ahmed)
    ->add_employee($ingvar)
    ->add_employee($zubairu);

echo 'Product Design team gets paid: '. $product_design_team->get_monthly_pay(). PHP_EOL;
echo 'Developer team gets paid: '. $developer_team->get_monthly_pay(). PHP_EOL;
echo PHP_EOL;

$digital = new BusinessUnit();
$digital
    ->add_team($product_design_team)
    ->add_team($developer_team)
    ->add_contractor(new HourlyEmployee());
echo 'The Digital Business Unit gets paid: '. $digital->get_monthly_pay().PHP_EOL;
    
