# Описание к репозиторию

Для создания виртуального образа использовалась связка:

    VirtualBox + Vagrant + PuPHPet;
    
Также необходимо что бы были установленно данное ПО:

    VirtualBox(https://www.virtualbox.org/);
    Vagrant(https://www.vagrantup.com/);

В данном случае Vagrantfile считывает все зависимости которые описаны в         \owox\puphpet\config.yaml, так как все зависимости были сформированы с использванием сервиса PuPHPet.

После клонирования репозитория -  в командной строке прописываем "vagrant up", подымаем виртуальную машину на базе ubuntu16 со всеми зависимостями.

Также для обращения по урлу как указано в задании "http://owox.demo:8080" - необходимо внести правки в hosts-файл.

    192.168.56.101 owox.demo

# Важное примечание!!!!
 Так как я добавил в .gitignore папку .vagrant, и при клоне репозитория прийдется пересобирать виртуалку заново(существующая таблица очистится), для связи с БД прийдется добавить базу с тестовой таблицей через терминал.

Пошаговые комманды:

    1) vagrant ssh; - заходим на виртуалку
    2) mysql -h 127.0.0.1 -u root -p; - конект в базе
    
Далее копируем и вставляем эти данные:

    CREATE DATABASE test;

    CREATE TABLE `testing` (
        `id` smallint( 11 ) NOT NULL AUTO_INCREMENT,
        `test` VARCHAR(15) NOT NULL,
        `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDb;

    INSERT INTO `testing` (`test`) VALUES ('test1');
    INSERT INTO `testing` (`test`) VALUES ('test2');
    INSERT INTO `testing` (`test`) VALUES ('test3');
    INSERT INTO `testing` (`test`) VALUES ('test4');

После этого по данному адресу "http://owox.demo:8080" будет происходить выборка из тестовой базы данных на виртульной машине.

Видимо надо было залить виртуалку вагранта также что бы не делать манипуляции с добавлением базы данных и таблицы соответственно и не пересобирать вагрант.