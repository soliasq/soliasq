CREATE DATABASE Bd_config_soliasq;
use Bd_config_soliasq;
ALTER DATABASE Bd_config_soliasq CHARACTER SET ='utf8mb4' COLLATE ='utf8mb4_unicode_ci';

show variables like "%innodb_file%";

--drop table tbcorreo;
DROP TABLE IF EXISTS tbCorreo;

CREATE TABLE IF NOT EXISTS tbCorreo(
idCorreo  int(25),
nombre VARCHAR(130) NOT NULL,
email VARCHAR(130) NOT NULL,
asunto VARCHAR(255) NOT NULL,
mensaje TEXT NOT NULL,
telefono VARCHAR(20) NOT NULL,
fecha DATETIME  NULL,
ip VARCHAR(30) NOT NULL,
navegador VARCHAR(255) NOT NULL,
so VARCHAR(255) NOT NULL,
pais VARCHAR(120)NULL,
dispositivo VARCHAR(100) NULl,
latitud varchar(30)  null,
longitud varchar(30)  null,
estado varchar(40)  null
);
--
-- PRIMARY KEY  tabla tbCorreo
--
ALTER TABLE tbCorreo
  ADD PRIMARY KEY (idCorreo);

--
-- AUTO_INCREMENT de la tabla `tbCorreo`
--
ALTER TABLE tbCorreo
  MODIFY idCorreo int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla `tbCorreo`
--

INSERT INTO tbCorreo (nombre,email,asunto,mensaje, fecha,ip,navegador,so, estado)
 VALUES('juan pedo','solisa@gmail.ocm','trabaje putin','como vas con el trabajo','1212-12-12','121.122.12.1','tor','windows','pendiente');

 --table logVisitas
DROP TABLE IF EXISTS tbVisitas;
CREATE TABLE tbVisitas(

  id int IDENTITY (1, 1) not null,
  ip VARCHAR(50) NOT NULL,
  country VARCHAR(60)NULL,
  latitutConatct varchar(30)  null,
  longitudContact varchar(30)  null,
  dispositivo VARCHAR(50) NULL,
  so VARCHAR(60)  NULL,
  browser  VARCHAR(60)  NULL,
  dateRegister DATETIME NOT NULL
);

    ALTER TABLE tbVisitas
  add primary key( idVisitas); 


  --CREATE TABLE VISITAS
  --drop table tbcorreo;

