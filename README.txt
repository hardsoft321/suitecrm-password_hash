Поле ввода пароля

Пример vardefs:
$dictionary["Contact"]["fields"]["passhash"] = array(
    'name' => 'passhash',
    'vname' => 'LBL_PASSHASH',
    'type' => 'PasswordHash',
    'dbtype' => 'varchar',
    'len' => '32',
    'function_require' => '', //путь до файла, который должен быть подключен (не обязательно)
    'function_name' => 'md5', //в базе будет сохранено значение этой функции от пароля
);
                        