<?php

  /**
   * Основные функции
   */

  /**
   * Формирование запрашиваемой страницы
   *
   * @param $controllerName - название контроллера
   * @param string $actionName - название функции обработки страницы
   */


  function loadPage($smarty, $controllerName, $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
  }

  /**
   *Загрузка шаблона
   *
   * @param $smarty - объект шаблонизатора
   * @param $templateName -название файла шаблона
   */
  function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TeplatePostfix);
  }

  /**
   *Функция отладки.Останавливает работу программы, выводя зн-е переменной $value
   *
   * @param null $value - перемнная для вывода на страницу
   * @param int $die
   */

  function d($value = null, $die = 1) {
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
  }