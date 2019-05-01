-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-04-29 21:49:03.943

-- tables
-- Table: Reportes
CREATE TABLE reportes (
    id_reporte int  NOT NULL AUTO_INCREMENT,
    lugar_reporte varchar(75)  NOT NULL,
    detalle varchar(255)  NULL,
    fecha date  NOT NULL,
    id_usuario int  NOT NULL DEFAULT 9999,
    CONSTRAINT Reportes_pk PRIMARY KEY (id_reporte)
);

-- End of file.
