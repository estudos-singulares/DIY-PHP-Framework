start transaction;
create database mvc;
use mvc;
create table artigos (id INT AUTO_INCREMENT Primary Key, titulo varchar(255), conteudo TEXT);
insert into artigos (titulo, conteudo) values
('Artigo 1', 'Conteúdo 1'),
('Artigo 2', 'Conteúdo 2'),
('Artigo 3', 'Conteúdo 3');
commit;