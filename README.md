# owox

Для создания виртуального образа использовалась связка:

VirtualBox + Vagrant + PuPHPet

В данном случае Vagrantfile считывает все зависимости которые описаны в \owox\puphpet\config.yaml, так как все зависимости были сформированы с использванием сервиса PuPHPet.

После клонирования репозитория -  в командной строке прописываем "vagrant up", подымаем виртуальную машину на базе ubuntu16 со всеми зависимостями.

Перед выполнением данной команды необходимо установить VirtualBox(https://www.virtualbox.org/) и Vagrant(https://www.vagrantup.com/) соответственно.

Доступ к виртульному серверу через "vagrant ssh".

Также для обращения по урлу как указано в задании "http:/owox.demo:8080" - необходимо внести правки в hosts-файл.

192.168.56.101 owox.demo www.owox.demo

После этого по данному адресу "http:/owox.demo:8080" будет происходить выборка из тестовой базы данных на виртульной машине.