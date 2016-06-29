<?php
$manifest = array(
    'name' => 'password_hash',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'hardsoft321',
    'description' => 'Поле ввода пароля',
    'is_uninstallable' => true,
    'published_date' => '2016-06-29',
    'type' => 'module',
    'version' => '1.0.0',
);
$installdefs = array(
    'id' => 'password_hash',
    'copy' => array(
        array(
            'from' => '<basepath>/source/copy',
            'to' => '.'
        ),
    ),
    'language' => array(
        array (
            'from' => '<basepath>/source/language/application/ru_ru.password_hash.php',
            'to_module' => 'application',
            'language' => 'ru_ru',
        ),
        array (
            'from' => '<basepath>/source/language/application/en_us.password_hash.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
    ),
);
