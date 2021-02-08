<?php

  include_once '../config/config.php';       // Инициализация настроек
  include_once '../lib/mainFunctions.php';  // Основные функции

  // определяем, с каким контороллером будем работать
  $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

  // определяем, с какой функцией будем работать
  $actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';

  loadPage($controllerName, $actionName);
