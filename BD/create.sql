create table usuarios(
    id int(10) auto_increment not null,
    usuario varchar(80) not null,
    correo varchar(80) not null,
    clave text(80) not null,
    constraint pk_usuarios primary key(id)
)ENGINE=InnoDb;

create table trabajador(
    id_trabajador int(10) auto_increment not null,
    codigotrabajador int(20) not null,
    nombre varchar(80) not null,
    apellido varchar(80) not null,
    edad int(10) not null,
    usuario varchar(50) not null,
    contrasena varchar(30) not null,
    constraint pk_trabajador primary key(id_trabajador)
)ENGINE=InnoDb;

create table registro_covid(
    id_registro_covid int(10) auto_increment not null,
    temperatura float(5,2) not null,
    hora_ingreso varchar(30) not null,
    fecha varchar(30) not null,
    id_trabajador int(10) not null,
    constraint pk_registro_covid primary key(id_registro_covid),
    constraint fk_trabajador_registro foreign key(id_trabajador) references trabajador(id_trabajador)
)ENGINE=InnoDb;


insert into usuarios (usuario,correo,clave) values ('Arnold','arnold@gmail.com','admin');
insert into usuarios (usuario,correo,clave) values ('Benjamin','benja@gmail.com','admin');
insert into usuarios (usuario,correo,clave) values ('Diego','diego@gmail.com','admin');

INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Roberto','Prado', 23004550, 23,'roberto','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Andrés','Casas', 23004551, 31,'andres','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Lucero','Sanchez', 23004552, 25,'lucero','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Aida','Lopez', 23004553, 21,'aida','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Diego','Rojas', 23004554, 43,'diego','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Daniela','Soria', 23004555, 23,'daniela','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Carlos','Castro', 23004556, 29,'carlos','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Sonia','Montoya', 23004557, 30,'sonia','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Arturo','Duran', 23004558, 46,'arturo','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Pablo','Farias', 23004559, 28,'pablo','123');
INSERT INTO trabajador (nombre, apellido, codigotrabajador, edad, usuario, contrasena) VALUES ('Elizabeth','Tello', 23004560, 25,'elizabeth','123');

INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (1, 36.45, '08:30:12', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (2, 37.09, '08:31:42', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (3, 36.56, '08:33:23', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (4, 37.01, '08:29:22', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (5, 37.10, '08:35:10', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (6, 38.12, '08:37:56', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (7, 37.47, '08:27:07', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (8, 36.87, '08:39:52', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (9, 36.65, '08:25:57', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (10, 36.97, '08:40:12', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (11, 37.12, '08:41:52', '2020-09-29');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (1, 36.45, '08:30:12', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (2, 37.09, '08:31:42', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (3, 36.56, '08:33:23', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (4, 37.01, '08:29:22', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (5, 37.10, '08:35:10', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (6, 37.32, '08:37:56', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (7, 37.47, '08:27:07', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (8, 36.87, '08:39:52', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (9, 36.65, '08:25:57', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (10, 36.97, '08:40:12', '2020-09-28');
INSERT INTO registro_covid (id_trabajador, temperatura, hora_ingreso, fecha) VALUES (11, 37.12, '08:41:52', '2020-09-28');
