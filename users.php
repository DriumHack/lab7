<?php
  // массив содержащий пользователей
  // по хорошему это все нужно хранить в БД, а пароль в шифрованном виде
  // но т.к. мы еще не изучали БД то поступим вот так вот просто
  // сохраним пользователей в ассоциативном массиве
  $users = array(
     "Vadim" => "321",
     "root" => "123",
     "test" => "123"
  );
  $mail = array(
    "Vadim" => "vadim@mail.ru",
    'root' => 'root@mail.ru'
  );
?>