<?php

  /**
   * Контроллер главной страницы
   */


  /**
   * Формирование главной страницы сайта
   *
   * @param $smarty - шаблонизатор
   */

  function indexAction($smarty) {
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'index');
  }
