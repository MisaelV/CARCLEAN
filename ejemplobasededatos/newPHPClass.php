<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author MIGUE
 */
class newPHPClass {
    
    //put your code here
    create table Cliente
(
Id_cliente int AUTO_INCREMENT PRIMARY KEY, 
Nombre nvarchar (20) NOT NULL, 
Apellido nvarchar (15) NOT NULL,
Dirección nvarchar (30) NOT NULL,
Telefono nvarchar (15) NOT NULL,
Email nvarchar (15) NOT NULL, 
);

create table Automovil
(
Id_auto int AUTO_INCREMENT PRIMARY KEY,
Marca nvarchar (15) NOT NULL,
Modelo nvarchar (15) NOT NULL,
Años nvarchar (20)  NULL,
Placas nvarchar (20) NOT NULL,
Color nvarchar (20) NULL,
);

create table Lavador
(
Id_lavador int AUTO_INCREMENT PRIMARY KEY,
Nombre nvarchar (30) NOT NULL,
Edad nvarchar (2) NOT NULL,
Escolarida nvarchar (25) NULL,
Dirección nvarchar (30) NOT NULL,
Telefono nvarchar (15) NOT NULL,
Email nvarchar (30) NULL,
Referencias nvarchar (200) NOT NULL,
)

create table Servicios
(
Id_servicio int AUTO_INCREMENT PRIMARY KEY,
Precio Decimal (7,2) NOT NULL,
)

create table Servicios-cli-lav-auto
(
Id_servicio int NOT NULL,
Id_cliente int NOT NULL,
Id_auto int Not Null,
Id_lavador int Not Null,
PRIMARY KEY Id_scla (Id_servicio,Id_clinte,Id_lavador,Id_auto),

)

create table Proveedor
(
Id_proveedor int AUTO_INCREMENT PRIMARY KEY,
Nombre nvarchar (30) NOT NULL,
Direccion nvarchar (30) NOT NULL,
Telefono nvarchar (15) NOT NULL,
)

create table Proveedor
(
Id_producto int AUTO_INCREMENT PRIMARY KEY,
Id_proveedor int FOREIGN KEY,
Producto nvarchar (30) NOT NULL,
Precio Decimal  (7,2) NOT NULL,
Existencia nvarchar (3) NOT NULL,
)


create table Adminitrador
(
Id_admin int AUTO_INCREMENT PRIMARY KEY,
Nombre nvarchar (30) NOT NULL,
Dirección nvarchar (30) NOT NULL,
Telefono nvarchar (15) NOT NULL,
Email nvarchar (30) NOT NULL,
)
}
