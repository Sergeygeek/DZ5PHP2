<?php

class User {
  private $id;
  private $login;
  private $name;
  private $password;
  
  public function __construct($login, $name, $password){
    $this->login = $login;
    $this->name = $name;
    $this->password = $password;
  }
  
  public function set() {
    // Заносим в базу данных данные пользователя
    // Устанавливаем куки
  }
  
  public function get() {
    // Если есть куки берем оттуда данные о пользователе
    // Иначе делаем запрос в базу данных
      // Получаем из базы данных данные о пользователе
    // Иначе выполняем метод set
  }
  
  public function update() {
    // Отправляем новые данные в БД
    // Устанавливаем их в куки
  }
  
  public function render() {
    //Выводим данные в личном кабинете
  }
  

}