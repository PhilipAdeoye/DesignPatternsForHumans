<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bridge;

require_once 'webpages.php';

// Dark Blue Pages
echo '=== Dark Blue Pages ==='. PHP_EOL;
$dark_blue_theme = new DarkBlueTheme();

$dark_blue_careers = new CareersPage($dark_blue_theme);
echo $dark_blue_careers->get_complete_page() . PHP_EOL;

$dark_blue_welcome = new WelcomePage($dark_blue_theme);
echo $dark_blue_welcome->get_complete_page() . PHP_EOL;

$dark_blue_about = new AboutPage($dark_blue_theme);
echo $dark_blue_about->get_complete_page() . PHP_EOL;

// Light Blue Pages
echo '=== Light Blue Pages ==='. PHP_EOL;
$light_blue_theme = new LightBlueTheme();

$light_blue_careers = new CareersPage($light_blue_theme);
echo $light_blue_careers->get_complete_page() . PHP_EOL;

$light_blue_welcome = new WelcomePage($light_blue_theme);
echo $light_blue_welcome->get_complete_page() . PHP_EOL;

$light_blue_about = new AboutPage($light_blue_theme);
echo $light_blue_about->get_complete_page() . PHP_EOL;

// Christmas Themed pages
echo '=== Christmas Themed Pages ==='. PHP_EOL;
$christmas_theme = new ChristmasTheme();

$christmas_careers = new CareersPage($christmas_theme);
echo $christmas_careers->get_complete_page() . PHP_EOL;

$christmas_welcome = new WelcomePage($christmas_theme);
echo $christmas_welcome->get_complete_page() . PHP_EOL;

$christmas_about = new AboutPage($christmas_theme);
echo $christmas_about->get_complete_page() . PHP_EOL;