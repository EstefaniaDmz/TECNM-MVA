--CREACIÓN DE LA BASE DE DATOS

CREATE DATABASE "TecMVA"
	WITH
	OWNER = postgres
	ENCODING = 'UTF8'
	CONNECTION LIMIT = -1;

--CREACION DE LAS TABLAS



CREATE TABLE EstadoCivil
(
	"idEstadoCivil" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKEstadoCivil" PRIMARY KEY ("idEstadoCivil")
);

ALTER TABLE IF EXISTS EstadoCivil
	OWNER to postgres;

ALTER TABLE IF EXISTS EstadoCivil
	ALTER COLUMN "idEstadoCivil" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE Genero
(
	"idGenero" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKGenero" PRIMARY KEY ("idGenero")
);

ALTER TABLE  Genero
	OWNER to postgres;


ALTER TABLE  Genero
	ALTER COLUMN "idGenero" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE Hora
(
	"idHora" integer not null,
	"descripcion" character varying(50) NOT NULL,
    "horaInicia" character varying(50) NOT NULL,
    "horaFinaliza" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKHora" PRIMARY KEY ("idHora")
);

ALTER TABLE  Hora
	OWNER to postgres;

ALTER TABLE Hora
	ALTER COLUMN "idHora" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);


CREATE TABLE InstitucionSalud
(
	"idInstitucionSalud" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKInstitucionSalud" PRIMARY KEY ("idInstitucionSalud")
);

ALTER TABLE InstitucionSalud
	OWNER to postgres;

ALTER TABLE InstitucionSalud
	ALTER COLUMN "idInstitucionSalud" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE Pais
(
	"idPais" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKPais" PRIMARY KEY ("idPais")
);


ALTER TABLE Pais
	OWNER to postgres;

ALTER TABLE Pais
	ALTER COLUMN "idPais" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE Periodo
(
	"idPeriodo" integer not null,
	"fechaInicia" character varying(50) NOT NULL,
	"fechaFinaliza" character varying(50) NOT NULL,
	"año" character varying(50) null,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKPeriodo" PRIMARY KEY ("idPeriodo")
);

ALTER TABLE Periodo
	OWNER to postgres;

ALTER TABLE Periodo
	ALTER COLUMN "idPeriodo" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);


CREATE TABLE Puesto
(
	"idPuesto" integer not null,
	"nombre" varchar (50) not null,
	"salario" integer NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKPuesto" PRIMARY KEY ("idPuesto")
);


ALTER TABLE Puesto
	OWNER to postgres;

ALTER TABLE Puesto
	ALTER COLUMN "idPuesto" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);




CREATE TABLE TipoActividad
(
	"idTipoActividad" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoActividad" PRIMARY KEY ("idTipoActividad")
);

ALTER TABLE TipoActividad
	OWNER to postgres;

ALTER TABLE TipoActividad
	ALTER COLUMN "idTipoActividad" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE TipoCursoMateria
(
	"idTipoCursoMateria" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoCursoMateria" PRIMARY KEY ("idTipoCursoMateria")
);

ALTER TABLE TipoCursoMateria
	OWNER to postgres;

ALTER TABLE TipoCursoMateria
	ALTER COLUMN "idTipoCursoMateria" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);




CREATE TABLE TipoOrganizacion
(
	"idTipoOrganizacion" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoOrganizacion" PRIMARY KEY ("idTipoOrganizacion")
);

ALTER TABLE TipoOrganizacion
	OWNER to postgres;

ALTER TABLE TipoOrganizacion
	ALTER COLUMN "idTipoOrganizacion" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);




CREATE TABLE TipoPago
(
	"idTipoPago" integer not null,
	"concepto" character varying(100) NOT NULL,
    "costo" character varying(100) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoPago" PRIMARY KEY ("idTipoPago")
);

ALTER TABLE TipoPago
	OWNER to postgres;

ALTER TABLE TipoPago
	ALTER COLUMN "idTipoPago" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE TipoSangre
(
	"idTipoSangre" integer not null,
	"tipo" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoSangre" PRIMARY KEY ("idTipoSangre")
);

ALTER TABLE TipoSangre
	OWNER to postgres;

ALTER TABLE TipoSangre
	ALTER COLUMN "idTipoSangre" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);




CREATE TABLE TipoServicio
(
	"idTipoServicio" integer not null,
	"nombre" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoServicio" PRIMARY KEY ("idTipoServicio")
);

ALTER TABLE TipoServicio
	OWNER to postgres;

ALTER TABLE TipoServicio
	ALTER COLUMN "idTipoServicio" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);















CREATE TABLE TipoUrgencia
(
	"idTipoUrgencia" integer not null,
	"clasificacion" integer not null,
	"descripcion" character varying(100) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoUrgencia" PRIMARY KEY ("idTipoUrgencia")
);

ALTER TABLE TipoUrgencia
	OWNER to postgres;

ALTER TABLE TipoUrgencia
	ALTER COLUMN "idTipoUrgencia" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);




CREATE TABLE TipoUsuario
(
	"idTipoUsuario" integer not null,
	"tipo" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKTipoUsuario" PRIMARY KEY ("idTipoUsuario")
);

ALTER TABLE TipoUsuario
	OWNER to postgres;

ALTER TABLE TipoUsuario
	ALTER COLUMN "idTipoUsuario" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);



CREATE TABLE Usuario
(
	"idUsuario" integer not null,
	"idTipoUsuario" integer,
	"nombreUsuario" character varying(50) NOT NULL,
	"correo" character varying(50) NOT NULL,
	"clave" character varying(50) NOT NULL,
	"estatus" integer NOT NULL DEFAULT 1,
	"idUsuarioCrea" integer DEFAULT NULL,
	"fechaCrea" date NOT NULL,
	"idUsuarioModifica" integer DEFAULT NULL,
	"fechaModifica" date DEFAULT NULL,
	CONSTRAINT "PKUsuario" PRIMARY KEY ("idUsuario")
);

ALTER TABLE Usuario
	OWNER to postgres;

ALTER TABLE Usuario
	ALTER COLUMN "idUsuario" ADD GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 999);


Create index idx_EstadoCivil on estadocivil("idEstadoCivil");
Create index ix_Genero on Genero("idGenero");
Create index ix_Hora on Hora ("idHora");
Create index ix_InstitucionSalud on institucionsalud("idInstitucionSalud");
Create index ix_Pais on Pais("idPais");
Create index ix_Periodo on Periodo ("idPeriodo");
Create index ix_Puesto on Puesto("idPuesto");
Create index ix_TipoActividad on TipoActividad("idTipoActividad");
Create index ix_TipoCursoMateria on TipoCursoMateria ("idTipoCursoMateria");
Create index ix_TipoOrganizacion on TipoOrganizacion ("idTipoOrganizacion");
Create index ix_TipoPago on TipoPago("idTipoPago");
Create index ix_TipoSangre on TipoSangre("idTipoSangre");
Create index ix_TipoServicio on TipoServicio ("idTipoServicio");
Create index ix_TipoUrgencia on TipoUrgencia ("idTipoUrgencia");
Create index ix_TipoUsuario on TipoUsuario ("idTipoUsuario");
Create index ix_Usuario on Usuario ("idUsuario");





INSERT INTO TipoUsuario("tipo", "fechaCrea")
    VALUES ('SA',NOW()),
       	('Administrador',NOW()),
           	('Usuario Regular',NOW());


INSERT INTO Usuario("idTipoUsuario","nombreUsuario","correo","clave","fechaCrea")
    VALUES (1,'Boris','Algo@Ejemplo','Tec123.',NOW());



INSERT INTO EstadoCivil("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Soltero',1,NOW()),
            ('Casado',2,NOW()),
       	('Divorciado',3,NOW()),
       	('En proceso de separacion',2,NOW()),
       	('Viudo',1,NOW()),
       	('Concubinato',3,NOW());

INSERT INTO Genero("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Femenino',1,NOW()),
           ('Masculino',1,NOW()),
           ('Otro',1,NOW());

INSERT INTO Hora("descripcion","horaInicia","horaFinaliza","idUsuarioCrea","fechaCrea")
    VALUES ('Primera_Hora_M','7:00','7:50',1,NOW()),
       	       ('Segunda_Hora_M','750','8:40',1,NOW()),
           	       ('Tercera_Hora_M','8:40','9:30',1,NOW()),
        	       ('Cuarta_Hora_M','9:30','10:20',1,NOW()),
       	       ('Quinta_Hora_M','10:40','11:30',1,NOW()),
       	       ('Sexta_Hora_M','11:30','12:20',1,NOW()),
                    ('Septima_Hora_M','12:20','01:10',1,NOW()),
                    ('Octava_Hora_M','01:10','02:00',1,NOW()),
                    ('Novena_Hora_M','02:00','02:50',1,NOW()),
                    ('Sexta_Hora_M','11:30','12:20',1,NOW()),
                    ('Primera_Hora_N','05:00','05:50',1,NOW()),
                    ('Segunda_Hora_N','05:50','06:40',1,NOW()),
                    ('Tercera_Hora_N','06:40','07:30',1,NOW()),
                    ('Cuarta_Hora_N','07:40','08:30',1,NOW()),
                    ('Quinta_Hora_N','08:30','09:20',1,NOW()),
                    ('Sexta_Hora_N','09:20','10:10',1,NOW());



INSERT INTO InstitucionSalud("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('IMSS',1,NOW()),
       	('ISSSTE',1,NOW()),
           	('SEDENA',1,NOW()),
           	('PEMEX',1,NOW()),
           	('UNICEF',1,NOW()),
           	('DIF',1,NOW());

INSERT INTO Pais ("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Mexico',1,NOW()),
                   ('Estados Unidos',1,NOW()),
                   ('Canadá',1,NOW()),
                   ('Brasil',1,NOW());



INSERT INTO Periodo("fechaInicia","fechaFinaliza","año","idUsuarioCrea","fechaCrea")
    VALUES  ('Febrero 10','Junio 10','2020',1,NOW()),
           	('Agosto 10','Diciembre 10','2020',1,NOW()),
           	('Febrero 10','Junio 10','2021',1,NOW()),
           	('Agosto 10','Diciembre 10','2021',1,NOW()),
           	('Febrero 10','Junio 10','2022',1,NOW()),
           	('Agosto 10','Diciembre 10','2022',1,NOW());




INSERT INTO Puesto("nombre","salario","idUsuarioCrea","fechaCrea")
    VALUES ('Docente',0,1,NOW()),
           	('Director generalx',0,1,NOW()),
           	('Puesto_3',0,1,NOW()),
           	('Puesto_4',0,1,NOW()),
           	('Puesto_5',0,1,NOW()),
           	('Puesto_6',0,1,NOW());


INSERT INTO TipoActividad ("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Cultural',1,NOW()),
           	('Academica',1,NOW()),
           	('Deportiva',1,NOW());




INSERT INTO TipoCursoMateria("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Ordinario',1,NOW()),
           ('Global',1,NOW());

INSERT INTO TipoOrganizacion ("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('Gubernamental',1,NOW()),
           	       ('Privada',1,NOW()),
                   ('Asociación',1,NOW()),
           	       ('Fundación',1,NOW());

INSERT INTO TipoPago("concepto","costo","idUsuarioCrea","fechaCrea")
    VALUES ('Kardex','150',1,NOW()),
                   ('Constancia de estudios','100',1,NOW()),
                   ('Reposición de credencial','100',1,NOW()),
                   ('Tramite de certificacion','300',1,NOW()),
                   ('Título de Ingeniería','2500',1,NOW()),
                   ('Cuota de recuperacion por tramite de cedula profesional','250',1,NOW()),
                   ('Carta pasante','200',1,NOW()),
                   ('Examen sumativa','100',1,NOW()),
                   ('Curso globala','250',1,NOW()),
                  ('Curso especial','200',1,NOW()),
                  ('Reinscripcion','500',1,NOW()),
                  ('Cuota de mantenimiento ingeniería','1200',1,NOW()),
                  ('Recargos por inscripción','200',1,NOW()),
                  ('Fichas','500',1,NOW()),
                  ('Análisis técnico de equivalencia por materia','200',1,NOW()),
                  ('Análisis técnico de equivalencia o convalidación por materia','100',1,NOW()),
                  ('Dictamen técnico de equivalencia','200',1,NOW()),
                  ('Cambio de turno','50',1,NOW()),
                  ('Cambio de carrera','Sin costo',1,NOW()),
                  ('Programa de materias','50',1,NOW()),
                  ('Certificado parcial','300',1,NOW()),
                  ('Curso propedéutico','500',1,NOW()),
                  ('Inscripción nuevo ingreso','500',1,NOW()),
                  ('Centro de cómputo','1',1,NOW()),
                  ('Materias de verano','El costo se fija en base al número de alumnos interesados',1,NOW()),
                  ('Cursos externos, internos y certificaciones','El costo se fija en base al número de alumnos interesados y horas requeridas',1,NOW()),
                  ('Venta de playeras ITSM','100',1,NOW()),
                  ('LIbros de ingles','500',1,NOW()),
                  ('Renta de cafetería','El costo se fija en base al número de propuestas planteadas',1,NOW()),
                  ('Renta de papelería','El costo se fija en base al número de propuestas planteadas',1,NOW()),
                  ('Costo por examen de inglés TOEFL (Alumnos,Egresados)','1000',1,NOW()),
                  ('Costo por examen de inglés TOEFL Externos','1200',1,NOW()),
                  ('Curso de aleman','700',1,NOW()),
                  ('Souvenir - CIlindro verde','40',1,NOW()),
                  ('Souvenir - Libreta impresa','70',1,NOW()),
                  ('Souvenir - Plumas impresas','70',1,NOW()),
                  ('Souvenir - Porta pasaporte','100',1,NOW()),
                  ('Souvenir - Termo de aluminio impreso','120',1,NOW()),
                  ('Envío de documentos oficiales por paqueteria (Guia Nacional)','400',1,NOW()),
                  ('Envío de documentos oficiales por paqueteria (Guia Internacional)','1000',1,NOW()),
                  ('Ficha posgrado','850',1,NOW()),
                  ('Inscripción posgrado','1700',1,NOW()),
                  ('Costo por materia de posgrado','2500',1,NOW()),
                  ('Cuota de mantenimiento posgrado','100',1,NOW()),
                  ('Servicio de gestion de cedula profesional','500',1,NOW()),
                  ('Título posgrado','4000',1,NOW()),
                  ('Curso de inglés para externos','1000',1,NOW()),
                  ('Intersemestral','300',1,NOW());                 




INSERT INTO TipoSangre("tipo","idUsuarioCrea","fechaCrea")
    VALUES ('A Positivo',1,NOW()),
           	('A Negativo',1,NOW()),
           	('B Positivo',1,NOW()),
           	('B Negativo',1,NOW()),
           	('AB Positivo',1,NOW()),
           	('AB Negativo',1,NOW()),
           	('O Positivo',1,NOW()),
           	('O Negativo',1,NOW());

INSERT INTO TipoServicio("nombre","idUsuarioCrea","fechaCrea")
    VALUES ('De Biblioteca',1,NOW()),
           	('De Sala de Computo',1,NOW()),
           	('De Enfermeria',1,NOW()),
           	('Escolar',1,NOW());





INSERT INTO TipoUrgencia("clasificacion","descripcion","idUsuarioCrea","fechaCrea")
    VALUES (1,'Pacientes que requieren atención médica inmediata por urgencias.',1,NOW()),
           	(2,'Pacientes que requieren atención médica en urgencias en menos de 30 minutos.',1,NOW()),
           	(3,'Pacientes que requieren atención médica en urgencias y que pueden esperar entre 60 y 120 minutos.',1,NOW());
