/*==============================================================*/
/* Table: debito_consumo
/*==============================================================*/
CREATE TABLE contasapagarconcessionarias(
CAP_CONS_CODIGO INT( 11 ) NOT NULL AUTO_INCREMENT ,
CAP_CONS_EMPRESA VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY ( CAP_CONS_CODIGO )
);
/*==============================================================*/
/*==============================================================*/
/* Table: concessionarias
/*==============================================================*/
CREATE TABLE concessionarias(
CONS_CODIGO INT( 11 ) NOT NULL AUTO_INCREMENT ,
CONS_EMPRESA VARCHAR( 11 ) NOT NULL ,
CONS_CODBARBL1 VARCHAR( 11 ) NOT NULL ,
CONS_CODBARBL2 VARCHAR( 1 ) NOT NULL ,
CONS_CODBARBL3 VARCHAR( 11 ) NOT NULL ,
CONS_CODBARBL4 VARCHAR( 1 ) NOT NULL ,
CONS_CODBARBL5 VARCHAR( 11 ) NOT NULL ,
CONS_CODBARBL6 VARCHAR( 1 ) NOT NULL ,
CONS_CODBARBL7 VARCHAR( 11 ) NOT NULL ,
CONS_CODBARBL8 VARCHAR( 1 ) NOT NULL ,
CONS_VALOR VARCHAR( 15 ) NOT NULL ,
CONS_DTD_EMIS VARCHAR( 2 ) NOT NULL ,
CONS_DTM_EMIS VARCHAR( 2 ) NOT NULL ,
CONS_DTA_EMIS VARCHAR( 4 ) NOT NULL ,
CONS_DTD_VENC VARCHAR( 2 ) NOT NULL ,
CONS_DTM_VENC VARCHAR( 2 ) NOT NULL ,
CONS_DTA_VENC VARCHAR( 4 ) NOT NULL ,
CONS_TIPO VARCHAR( 50 ) NOT NULL ,
CONS_STATUS VARCHAR( 15 ) NOT NULL ,
CONS_DT_CAD VARCHAR( 50 ) ,
CONS_DT_ALT VARCHAR( 50 ) ,
PRIMARY KEY ( CONS_CODIGO )
);
/*==============================================================*/

/*==============================================================*/
/* Table: contasapagarboletos
/*==============================================================*/
CREATE TABLE contasapagarboletos(
CAP_BLT_CODIGO INT( 11 ) NOT NULL AUTO_INCREMENT ,
CAP_BLT_BANCO VARCHAR( 30 ) NOT NULL ,
PRIMARY KEY ( CAP_BLT_CODIGO )
);
/*==============================================================*/

/*==============================================================*/
/* Table: boletos
/*==============================================================*/
CREATE TABLE boletos(
BLT_CODIGO INT( 11 ) NOT NULL AUTO_INCREMENT ,
BLT_BANCO VARCHAR( 30 ) NOT NULL ,
BLT_CEDENTE VARCHAR( 50 ) NOT NULL ,
BLT_CODBARBL1 VARCHAR( 5 ) NOT NULL ,
BLT_CODBARBL2 VARCHAR( 5 ) NOT NULL ,
BLT_CODBARBL3 VARCHAR( 5 ) NOT NULL ,
BLT_CODBARBL4 VARCHAR( 6 ) NOT NULL ,
BLT_CODBARBL5 VARCHAR( 5 ) NOT NULL ,
BLT_CODBARBL6 VARCHAR( 6 ) NOT NULL ,
BLT_CODBARBL7 VARCHAR( 1 ) NOT NULL ,
BLT_CODBARBL8 VARCHAR( 14 ) NOT NULL ,
BLT_VALOR VARCHAR( 15 ) NOT NULL ,
BLT_DTD_EMIS VARCHAR( 2 ) NOT NULL ,
BLT_DTM_EMIS VARCHAR( 2 ) NOT NULL ,
BLT_DTA_EMIS VARCHAR( 4 ) NOT NULL ,
BLT_DTD_VENC VARCHAR( 2 ) NOT NULL ,
BLT_DTM_VENC VARCHAR( 2 ) NOT NULL ,
BLT_DTA_VENC VARCHAR( 4 ) NOT NULL ,
BLT_OBS VARCHAR( 50 ) NOT NULL ,
BLT_STATUS VARCHAR( 15 ) NOT NULL ,
BLT_DT_CAD VARCHAR( 50 ) ,
BLT_DT_ALT VARCHAR( 50 ) ,
PRIMARY KEY ( BLT_CODIGO )
);
/*==============================================================*/