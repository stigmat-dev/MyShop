<?php

  /**
   * Файл настроек
   */

  //> Константы для обращения к контроллерам
  define('PathPrefix', '../controllers/');
  define('PathPostfix', 'Controller.php');
  //<

  //> Используемый шаблон
  $template = 'default';

  // пути к файлам шаблонов (*.tpl)
  define('TemplatePrefix', "../views/{$template}/");
  define('TeplatePostfix', '.tpl');

  // пути к файлам шаблонов в вебпространстве
  define('TemplateWebPath', "/templates/{$template}/");//<

  //> Инициализация шаблонизатора Smarty
  require('../lib/Smarty/libs/Smarty.class.php');
  $smarty = new Smarty();

  $smarty->setTemplateDir(TemplatePrefix);
  $smarty->setCompileDir('../tmp/smarty/templates_c');
  $smarty->setCacheDir('../tmp/smarty/cache');
  $smarty->setConfigDir('../lib/Smarty/configs');

  $smarty->assign('templateWebPath', TemplateWebPath);
  //<
