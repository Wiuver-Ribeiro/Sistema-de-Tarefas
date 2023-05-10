# COMO INSTALAR O PROJETO

### Clone o Repostório para sua máquina

* Acesse o prompt de comando e rode o comando ``` git clone ``` dentro da sua pasta de preferência

* Acesse PhpMyAdmin e crie um novo banco de dados 
>Com nome de **ead02**  e rode o seguinte comando com o banco já criado

~~~mysql
CREATE TABLE tarefas (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sigla VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    data_inicio DATE NOT NULL,
    data_fim DATE NOT NULL
);
~~~

* Em seguida abre o seu projeto no ```localhost/tarefas```


