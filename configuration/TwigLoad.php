<?php 
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указываем где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
 /* 
  // подгружаем шаблон
  $template = $twig->loadTemplate('index.tmpl');
  
  // передаём в шаблон переменные и значения
  
  // выводим сформированное содержание
  echo $template->render(array(
    'images' => $sortedGood,
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}*/
?>