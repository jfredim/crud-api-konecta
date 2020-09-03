CREATE DATABASE php_crud_api_db;

use php_crud_api_db;


CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `id` int(11) IDENTITY(1,1) PRIMARY KEY,
  `nombre` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `stock` int(10) NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `fecha_ult_venta` DATETIME


) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

SHOW tables;

INSERT INTO tbl_productos (`id`, `nombre`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`, `fecha_ult_venta`) VALUES
(1, 'camisa', 400,10, 'mujer', 25, 20200902, ''),
(2, 'pantalon', 300,5, 'hombre', 9, 20200902, '')