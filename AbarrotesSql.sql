CREATE DATABASE AbarrotesNestor;
CREATE TABLE categoria(id_cat INT AUTO_INCREMENT PRIMARY KEY, nombre_cat VARCHAR(50), descripcion_cat VARCHAR (100));
CREATE TABLE productos(id_prod INT AUTO_INCREMENT PRIMARY KEY, nombre_prod VARCHAR(50), costo DECIMAL(7,2), descripcion_prod VARCHAR(100), codigo_barras VARCHAR(30), fkId_categoria INT, FOREIGN KEY (fkId_categoria) REFERENCES categoria(id_cat));
CREATE TABLE pedidos(id_ped INT AUTO_INCREMENT PRIMARY KEY, nom_ped INT, nombre_cliente VARCHAR(50), direccion VARCHAR(100));
CREATE TABLE det_venta(id_venta INT AUTO_INCREMENT PRIMARY KEY, cantidad INT, total DECIMAL(8,2), fkId_prod INT, FOREIGN KEY (fkabarrotesnestorId_prod) REFERENCEs productos(id_prod), fkId_ped INT, FOREIGN KEY(fkId_ped) REFERENCEs pedidos (id_ped));