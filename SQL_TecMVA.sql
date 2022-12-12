
USE master
GO

IF DB_ID (N'TecMVA') IS NOT NULL
DROP DATABASE TecMVA
GO

CREATE DATABASE TecMVA
ON
( NAME = TecMVA_dat,
    FILENAME = 'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\TecMVA.mdf')
LOG ON
( NAME = TecMVA_log,
    FILENAME = 'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\TecMVA.ldf') ;
GO

USE TecMVA
GO
--Usuario
create table Usuario
(
idUsuario int identity (1,1),
apellidoMaterno varchar(50) not null,
apellidoPaterno varchar(50) not null,
nombreCompleto varchar(50) not null,
idTipoUsuario int not null,
correo varchar(50) not null,
clave varchar(50) not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,


constraint PKUsuario PRIMARY KEY (idUsuario)

)

--Actividad
create table Actividad
(
idActividad  int identity (1,1),
idTipoActividad int default null,
nombre varchar (50) not null,
creditoValor int not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKActividad PRIMARY KEY (idActividad)
)

--ActivoFijo
CREATE TABLE ActivoFijo
(
	idActivoFijo int IDENTITY (1, 1),
	nombre varchar (50) not null,
	marca varchar (50) not null,
	modelo varchar (50) not null,
	descripcion varchar (50) not null,
	idArea int not null,
    idTipoActivoFijo int not null,
	estatus bit default 1,
	idUsuarioCrea int null,
	fechaCrea datetime null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKActivoFijo PRIMARY KEY(idActivoFijo)
)

--Alumno

CREATE TABLE Alumno(
	idAlumno int IDENTITY,
	matricula varchar (20) not null UNIQUE,
	nombre varchar (100) not null,
	apellidoPaterno varchar (50) not null,
	apellidoMaterno varchar (50) not null,
	fechaNacimiento date not null,
	curp char (18) not null UNIQUE,
	rfc char (13) not null,
	idGenero int not null,
	discapacidad varchar (50),
	lenguaIndigena varchar(50),
	nss varchar (20),
	idInstitucionSalud int,
	telefono char (10) not null,
	correoPersonal varchar (100) not null,
	correoInstitucional varchar (100),
	idCarrera int not null,
	semestre int not null,
	idTurno int not null,
	idPreparatoria int not null,
	promedioGeneralPrepa decimal (4,2) not null,
	calle varchar (100) not null,
	numeroInterior char(10),
	numeroExterior char(10),
	idAsentamiento int not null,
	idCiudadNacimiento int not null,
	idTipoSangre int not null,
	alergia varchar(250),
	lugarTrabajo varchar (200),
	horarioTrabajo varchar (100),
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int  null,
	fechaModifica datetime null
	CONSTRAINT PKAlumno PRIMARY KEY(idAlumno)
)


--ALumnoCursoMateria
create table AlumnoCursoMateria
(
idAlumnoCursoMateria int IDENTITY,
idAlumno int not null,
idMateria int null,
calificacion int  not null,
idPeriodo int not null,
estatus bit default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
CONSTRAINT iPKAlumnoCursoMateria PRIMARY KEY(idAlumnoCursoMateria)

)

--AlumnoActividad
CREATE TABLE AlumnoActividad(
	idAlumnoActividad int IDENTITY,
	nivel int not null,
	observacion varchar (100),
	valorCredito int not null,
	idPeriodo int not null,
	idAlumno int not null,
	idEmpleado int not null,
	idActividad int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKEAlumnoActividad PRIMARY KEY(idAlumnoActividad)
)

--Area
CREATE TABLE Area
(
	idArea int IDENTITY (1, 1),
	nombre varchar (50) not null,
	idEdificio int not null,
	estatus bit default 1,
	idUsuarioCrea int null,
	fechaCrea datetime null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKArea PRIMARY KEY(idArea)
)

--Asentamiento
CREATE TABLE Asentamiento(
	idAsentamiento int IDENTITY,
	id int,
	nombre varchar (100) not null,
	codigoPostal char (5) not null,
	idTipoAsentamiento int not null,
	idCiudad int not null,
	idZona int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAsentamiento PRIMARY KEY(idAsentamiento)
)

--ASignatura
CREATE TABLE Asignatura(
	idAsignatura int IDENTITY,
	clave varchar (10) not null,
	nombre varchar(50) not null,
	horasPractica int not null,
	horasTeoricas int not null,
	creditos int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAsignatura PRIMARY KEY(idAsignatura)
)

CREATE TABLE AsignaturaDocente(
	idAsignaturaDocente int IDENTITY,
	idAsignatura int not null,
	idDocente int not null,
	idHora int not null,
	idPeriodo int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAsignaturaDocente PRIMARY KEY(idAsignaturaDocente)

)


CREATE TABLE AlumnoAsignaturaDocente(
	idAlumnoAsignaturaDocente int IDENTITY,
	idAsignaturaDocente int not null,
	idAlumno int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAlumnoAsignaturaDocente PRIMARY KEY(idAlumnoAsignaturaDocente)

)	

--Aspitante
CREATE TABLE Aspirante(
	idAspirante int IDENTITY (1,1),
	nombre varchar (100) not null,
	apellidoPaterno varchar (50) not null,
	apellidoMaterno varchar (50) not null,
	curp char (18) not null UNIQUE,
	correo varchar (100) not null,
	telefono char (10) not null,
	idGenero int not null,
	idPreparatoria int not null,
	promedioGeneral decimal (4,2) not null,
	fechaEgreso date default null,
	fechaNacimiento date not null,
	idCiudadNacimiento int not null,
	calle varchar (100) not null,
	numeroInterior char (5),
	numeroExterior char (5),
	idAsentamiento int not null,
	idPais int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime  null
	CONSTRAINT PKAspirante PRIMARY KEY(idAspirante)
)

--BibliotecaServicio
CREATE TABLE BibliotecaServicio
(
	idBibliotecaServicio int IDENTITY (1, 1),
	fecha datetime not null,
	idServicio int not null,
	idPuesto int default null,
	idCarrera int default null,
	idTurno int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKBibliotecaServicio PRIMARY KEY(idBibliotecaServicio)
)

--Carrera

CREATE TABLE Carrera(
	idCarrera int IDENTITY (1,1),
	nombre varchar (50) not null,
	clave char(5) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime  null
	CONSTRAINT PKCarrera PRIMARY KEY(idCarrera)
)
--Ciudad
CREATE TABLE Ciudad(
	idCiudad int IDENTITY (1,1),
	nombre varchar (50) not null,
	codigo int not null,
	idEstado int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKCiudad PRIMARY KEY(idCiudad)
)
--COntrato
create table Contrato
(
idContrato int identity (1,1),
fechaInicio datetime not null,
fechaFinal datetime,
cantidadHoras int not null,
duracion int not null,
salario int not null,
idEmpleado int not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKContrato PRIMARY KEY (idContrato)
)

create table Consumible(
idConsumible int identity(1,1),
nombre varchar(50) not null,
descripcion varchar(50),
cantidad int not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKConsumible PRIMARY KEY (idConsumible)
)

--CursoExtraor
CREATE TABLE CursoExtraordinario
(
	idCursoExtraordinario int IDENTITY (1, 1),
	idTipoCursoMateria int not null,
	idDocente int not null,
	fechaInicio datetime not null,
	fechaFinal datetime not null,
	totalHoras int not null,
	totalAlumnos int not null,
	precio int not null,
	precioIndividual decimal not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKCursoExtraordinario PRIMARY KEY(idCursoExtraordinario)
)

--Departamento
create table Departamento
(
idDepartamento int identity (1,1),
nombre varchar (50) not null,
idEdificio int not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKDepartamento PRIMARY KEY (idDepartamento)
)

--Documento

CREATE TABLE Documento
(
	idDocumento int IDENTITY (1, 1),
	nombre varchar (100) not null,
	descripcion varchar (250) not null,
	idTipoDocumento int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKDocumento PRIMARY KEY(idDocumento)
)
--Edificio
CREATE TABLE Edificio
(
	idEdificio int IDENTITY (1, 1),
	nombre varchar (10) not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKEdificio PRIMARY KEY(idEdificio)
)
--EnfermeriaServicio
CREATE TABLE EnfermeriaServicio
(
	idEnfermeriaServicio int IDENTITY (1, 1),
	fecha datetime not null,
	idEmpleado int default null,
	idAlumno int default null,
	idServicio int not null,
	idTipoUrgencia int not null,
	observacion varchar (250) not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKEnfermeriaServicio PRIMARY KEY(idEnfermeriaServicio)
)
--Empleado
create table Empleado
(
idEmpleado int identity (1,1),
curp char (18) not null,
nss char (11) not null,
nombre varchar (50) not null,
apellidoMaterno varchar (50) not null,
apellidoPaterno varchar (50) not null,
correoElectronico varchar (50) default null,
salario int not null,
telefono char (10) not null,
idGenero int not null,
idPais int not null,
idAsentamiento int not null,
calle varchar (50) not null,
numeroExterior varchar (10) null,
numeroInterior varchar (10) null,
fechaNacimiento datetime not null,
idEstadoCivil int not null,
idPuesto int not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKEmpleado PRIMARY KEY (idEmpleado)
)
--Estado
CREATE TABLE Estado
(
	idEstado int IDENTITY (1,1),
	nombre varchar (50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKEstado PRIMARY KEY(idEstado)
)

--EstadoCivil
CREATE TABLE EstadoCivil
(
	idEstadoCivil int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKEstadoCivil PRIMARY KEY(idEstadoCivil)
)


--Ficha

CREATE TABLE Ficha
 (
	idFicha int IDENTITY (1,1),
	folio char(5)not null,
	fecha date not null,
	idTurno int not null,
	idCarreraPrimera int not null,
	idCarreraSegunda int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKFicha PRIMARY KEY(idFicha)
)

--Genero
CREATE TABLE Genero
(
	idGenero int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKGenero PRIMARY KEY(idGenero)
)

--Hora
CREATE TABLE Hora
(
	idHora int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKHora PRIMARY KEY(idHora)
)

--Hora
CREATE TABLE InstitucionSalud
(
	idInstitucionSalud int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKInstitucionSalud PRIMARY KEY(idInstitucionSalud)
)

--Justificante
CREATE TABLE Justificante
(
idJustificante int identity(1,1),
idAlumno int not null,
motivo varchar (100) not null,
fecha datetime not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKJustificante PRIMARY KEY (idJustificante)
)

--ORganizacion
CREATE TABLE Organizacion
(
	idOrganizacion int IDENTITY (1, 1),
	nombre varchar (100) not null,
	rfc varchar (13) not null,
	calle varchar (50) not null,
	numeroInterior varchar (5) not null,
	numeroExterior varchar (5) default null,
	idAsentamiento int not null,
	idTipoOrganizacion int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKOrganizacion PRIMARY KEY(idOrganizacion)
)

--Pago
CREATE TABLE Pago
(
	idPago int IDENTITY (1, 1),
	idAlumno int not null,
	idTipoPago int not null,
	folio varchar(50) not null,
	monto int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKPago PRIMARY KEY(idPago)
)

--Pais
CREATE TABLE Pais
(
	idPais int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKPais PRIMARY KEY(idPais)
)

--Periodo
CREATE TABLE Periodo
(
	idPeriodo int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKPeriodo PRIMARY KEY(idPeriodo)
)

--PReparatoria
CREATE TABLE Preparatoria(
	idPreparatoria int IDENTITY (1,1),
	nombre varchar (100) not null,
	calle varchar (50) not null,
	numero varchar (10),
	idAsentamiento int not null,
	idTipoPreparatoria int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKPreparatoria PRIMARY KEY(idPreparatoria)
)

--PRestamoFactura
CREATE TABLE PrestamoPrefectura
(
	idPrestamoPrefectura int IDENTITY (1, 1),
	idActivoFijo int not null,
	fechaSalida datetime not null,
	fechaRegreso datetime default null,
	idDocente int not null,
	idPrefecto int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKPrestamoPrefectura PRIMARY KEY(idPrestamoPrefectura)
)

--Puesto
CREATE TABLE Puesto
(
	idPuesto int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKPuestoo PRIMARY KEY(idPuesto)
)

--Residencia
create table Residencia
(
idResidencia int identity (1,1),
idAlumno int not null,
idEmpleado int not null,
idOrganizacion int not null,
fechaInicio datetime not null,
fechaFinal datetime not null,
estatus int default 1,
idUsuarioCrea int not null,
fechaCrea datetime not null default CURRENT_TIMESTAMP,
idUsuarioModifica int null,
fechaModifica datetime null
constraint PKResidencia primary key (idResidencia)
)

--Servicio

CREATE TABLE Servicio
(
	idServicio int IDENTITY (1, 1),
	nombre varchar (50) not null,
	idTipoServicio int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKServicio PRIMARY KEY(idServicio)
)

--ServicioSocial

create table ServicioSocial
(
idServicioSocial int identity (1,1),
idAlumno int not null,
fechaInicio datetime not null,
fechaFinal datetime not null,
idOrganizacion int not null,
estatus int default 1,
idUsuarioCrea int not null,
fechaCrea datetime not null default CURRENT_TIMESTAMP,
idUsuarioModifica int null,
fechaModifica datetime null
constraint PKServicioSocial primary key (idServicioSocial)
)

--Softweare
CREATE TABLE Software
(
	idSoftware int IDENTITY (1, 1),
	nombre varchar (50) not null,
	marca varchar (50) not null,	
	version varchar (50) not null,
	descripcion varchar (50) not null,
	estatus bit default 1,
	idUsuarioCrea int null,
	fechaCrea datetime null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKSoftware PRIMARY KEY(idSoftware)
)

CREATE TABLE SoftwareEquipo
(
	idSoftwareEquipo int IDENTITY (1, 1),
	idSoftware int not null,
	idActivoFijo int not null,
	estatus bit default 1,
	idUsuarioCrea int null,
	fechaCrea datetime null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKSoftwareEquipo PRIMARY KEY(idSoftwareEquipo)
)

--SolicitudLaboratorio

create table SolicitudLaboratorio
(
idSolicitudLaboratorio int identity(1,1),
idEmpleado int,
fecha datetime not null,
numeroAlumnos int not null,
notas varchar (100),
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKSolicitudLaboratorio primary key (idSolicitudLaboratorio)
)

--TipoActividad
CREATE TABLE TipoActividad
(
	idTipoActividad int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoActividad PRIMARY KEY(idTipoActividad)
)

--SolicitudConsumible
create table SolicitudConsumible
(
idSolicitudConsumible int identity(1,1),
idSolicitudLaboratorio int not null,
idConsumible int,
notas varchar (100),
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKSolicitudConsumible primary key (idSolicitudConsumible)
)

create table SolicitudSoftware
(
idSolicitudSoftware int identity(1,1),
idSolicitudLaboratorio int not null,
idSoftware int,
notas varchar (100),
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKSolicitudSoftware primary key (idSolicitudSoftware)
)



create table SolicitudHerramienta
(
idSolicitudHerramienta int identity(1,1),
idSolicitudLaboratorio int not null,
idActivoFijo int,
fecha datetime not null,
estatus int default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKSolicitudHerramienta primary key (idSolicitudHerramienta)
)
--TIpoActivoFijo
CREATE TABLE TipoActivoFijo
(
	idTipoActivoFijo int IDENTITY (1, 1),
	nombre varchar(50) not null,
	estatus bit default 1,
	idUsuarioCrea int null,
	fechaCrea datetime null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKTipoActivoFijo PRIMARY KEY(idTipoActivoFijo)
)


--TIpoAsetntamiento

CREATE TABLE TipoAsentamiento(
	idTipoAsentamiento int IDENTITY (1,1),
	nombre varchar (50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoAsentamiento PRIMARY KEY(idTipoAsentamiento)
)

--TipoCursoMateria
CREATE TABLE TipoCursoMateria
(
	idTipoCursoMateria int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoCursoMateria PRIMARY KEY(idTipoCursoMateria)
)

--TipoDocumento
CREATE TABLE TipoDocumento
(
	idTipoDocumento int IDENTITY (1,1),	
	nombre varchar(50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoDocumento PRIMARY KEY(idTipoDocumento)
)

--TipoOrganizacion
CREATE TABLE TipoOrganizacion
(
	idTipoOrganizacion int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoOrganizacion PRIMARY KEY(idTipoOrganizacion)
)

--TipoPago
CREATE TABLE TipoPago
(
	idTipoPago int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoPago PRIMARY KEY(idTipoPago)
)

--TipoPreparatoria
CREATE TABLE TipoPreparatoria(
	idTipoPreparatoria int IDENTITY (1,1),
	nombre varchar (50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKTipoPreparatoria PRIMARY KEY(idTipoPreparatoria)
)

--TipoSangre
CREATE TABLE TipoSangre
(
	idTipoSangre int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoSangre PRIMARY KEY(idTipoSangre)
)

--TipoServicio
CREATE TABLE TipoServicio
(
	idTipoServicio int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoServicio PRIMARY KEY(idTipoServicio)
)

--TipoUrgencia
CREATE TABLE TipoUrgencia
(
	idTipoUrgencia int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoUrgencia PRIMARY KEY(idTipoUrgencia)
)

--TipoUsuario
CREATE TABLE TipoUsuario
(
	idTipoUsuario int IDENTITY (1,1),	
	estatus bit default 1 not null,
	idUsuarioCrea int,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKTipoUsuario PRIMARY KEY(idTipoUsuario)
)

--TUrno

CREATE TABLE Turno(
	idTurno int IDENTITY (1,1),
	nombre varchar (20) not null,
	horaInicio time not null,
	horaFinal time not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKTurno PRIMARY KEY(idTurno)
)

--Tutor
CREATE TABLE Tutor(
	idTutor int IDENTITY (1,1),
	nombre varchar (100) not null,
	apellidoPaterno varchar (50) not null,
	apellidoMaterno varchar (50) not null,
	fechaNacimiento date not null,
	curp char (18) not null UNIQUE,
	telefono char (10) not null,
	numeroInterior int,
	numeroExterior int,
	calle varchar (100) not null,
	idAsentamiento int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKTutor PRIMARY KEY(idTutor)
)
--VIsita
create table Visita
(
idVisita int identity (1,1),
idEmpleado int not null,
idCarrera int not null,
numeroAlumnos int not null ,
semestre int not null,
fechaSolicitada datetime  not null,
empresaPropuesta varchar (50),
idActivoFijo int not null,
objetivo varchar (150),
estatus int default 1,
idUsuarioCrea int not null,
fechaCrea datetime not null default CURRENT_TIMESTAMP,
idUsuarioModifica int null,
fechaModifica datetime null
constraint PKVisita primary key (idVisita)
)
--zona
CREATE TABLE Zona(
	idZona int IDENTITY (1,1),
	nombre varchar (50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKZona PRIMARY KEY(idZona)
)
--alumnocursoextra
CREATE TABLE AlumnoCursoExtra
(
	idAlumnoCursoExtra int IDENTITY (1, 1),
	idAlumno int not null,
	idCursoExtraordinario int not null,
	idPago int not null,
	estatus bit default 1,
	idUsuarioCrea int not null,
	fechaCrea datetime default GETDATE(),
	idUsuarioModifica int default null,
	fechaModifica datetime default null,
	CONSTRAINT PKAlumnoCursoExtra PRIMARY KEY(idAlumnoCursoExtra)
)
--AlumnoDocumento
CREATE TABLE AlumnoDocumento(
	idAlumnoDocumento int IDENTITY (1,1),
	idAlumno int not null,
	idDocumento int not null,
	fechaEntrega date not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAlumnoDocumento PRIMARY KEY(idAlumnoDocumento)
)
--ALumnotutor
CREATE TABLE AlumnoTutor(
	idAlumnoTutor int IDENTITY (1,1),
	idAlumno int not null,
	idTutor int not null,
	parentesco varchar(50) not null,
	contactoEmergencia bit not null,
	recogeDocumento bit not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null,
	idUsuarioModifica int default null,
	fechaModifica datetime default null
	CONSTRAINT PKAlumnoTutor PRIMARY KEY(idAlumnoTutor)
)
--AsignaturaCarrera
CREATE TABLE AsignaturaCarrera(
	idAsignaturaCarrera int IDENTITY (1,1),
	idAsignatura int not null,
	idCarrera int not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int null,
	fechaModifica datetime null
	CONSTRAINT PKAsignaturaCarrera PRIMARY KEY(idAsignaturaCarrera)
)
--EmpleadoDocumento
create table EmpleadoDocumento
(
idEmpleadoDocumento int IDENTITY (1,1),
idEmpleado int not null,
idDocumento int not null,
fechaEntrega date not null,
estatus bit default 1,
idUsuarioCrea int null,
fechaCrea datetime null,
idUsuarioModifica int default null,
fechaModifica datetime default null,
constraint PKEmpleadoDocumento PRIMARY KEY (idEmpleadoDocumento)
);

CREATE INDEX IX_Actividad on Actividad(idActividad)
CREATE INDEX IX_ActivoFijo on ActivoFijo(idActivoFijo) 
CREATE INDEX IX_Alumno on Alumno(idAlumno) 
CREATE INDEX IX_AlumnoActividad on AlumnoActividad(idAlumnoActividad) 
CREATE INDEX IX_AlumnoCursoMateria on AlumnoCursoMateria(idAlumnoCursoMateria)
CREATE INDEX IX_Area on Area(idArea) 
CREATE INDEX IX_Asentamiento on Asentamiento(idAsentamiento) 
CREATE INDEX IX_Asignatura on Asignatura(idAsignatura) 
CREATE INDEX IX_AsignaturaDocente on AsignaturaDocente(idAsignaturaDocente) 
CREATE INDEX IX_AlumnoAsignaturaDocente on AlumnoAsignaturaDocente(idAlumnoAsignaturaDocente) 
CREATE INDEX IX_Aspirante on Aspirante(idAspirante) 
CREATE INDEX IX_BiblioteaServicio on BibliotecaServicio(idBibliotecaServicio) 
CREATE INDEX IX_Carrera on Carrera(idCarrera) 
CREATE INDEX IX_Ciudad on Ciudad(idCiudad) 
CREATE INDEX IX_Contrato on Contrato(idContrato) 
CREATE INDEX IX_Consumible on Consumible(idConsumible)
CREATE INDEX IX_CursoExtraordinario on CursoExtraordinario(idCursoExtraordinario) 
CREATE INDEX IX_Departamento on Departamento(idDepartamento) 
CREATE INDEX IX_Documento on Documento(idDocumento) 
CREATE INDEX IX_Edificio on Edificio(idEdificio) 
CREATE INDEX IX_EnfermeriaServicio on EnfermeriaServicio(idEnfermeriaServicio) 
CREATE INDEX IX_Empleado on Empleado(idEmpleado) 
CREATE INDEX IX_Estado on Estado(idEstado) 
CREATE INDEX IX_EstadoCivil on EstadoCivil(idEstadoCivil) 
CREATE INDEX IX_Ficha on Ficha(idFicha) 
CREATE INDEX IX_Genero on Genero(idGenero) 
CREATE INDEX IX_Hora on Hora(idHora) 
CREATE INDEX IX_InstitucionSalud on InstitucionSalud(idInstitucionSalud) 
CREATE INDEX IX_Justificante on Justificante(idJustificante) 
CREATE INDEX IX_Organizacion on Organizacion(idOrganizacion) 
CREATE INDEX IX_Pago on Pago(idPago)
CREATE INDEX IX_Pais on Pais(idPais)
CREATE INDEX IX_Periodo on Periodo(idPeriodo)
CREATE INDEX IX_Preparatoria on Preparatoria(idPreparatoria) 
CREATE INDEX IX_PrestamoPrefectura on PrestamoPrefectura(idPrestamoPrefectura) 
CREATE INDEX IX_Puesto on Puesto(idPuesto) 
CREATE INDEX IX_Residencia on Residencia(idResidencia) 
CREATE INDEX IX_Servicio on Servicio(idServicio) 
CREATE INDEX IX_ServicioSocial on ServicioSocial(idServicioSocial) 
CREATE INDEX IX_Software on Software(idSoftware) 
CREATE INDEX IX_SoftwareEquipo on Software(idSoftware) 
CREATE INDEX IX_SolicitudLaboratorio on SolicitudLaboratorio(idSolicitudLaboratorio) 
CREATE INDEX IX_SolicitudSoftware on SolicitudSoftware(idSolicitudSoftware)
CREATE INDEX IX_SolicitudConsumible on SolicitudConsumible(idSolicitudConsumible)
CREATE INDEX IX_SolicitudHerramienta on SolicitudHerramienta(idSolicitudHerramienta)
CREATE INDEX IX_TipoActividad on TipoActividad(idTipoActividad)
CREATE INDEX IX_TipoActivoFijo on TipoActivoFijo(idTipoActivoFijo) 
CREATE INDEX IX_TipoAsentamiento on TipoAsentamiento(idTipoAsentamiento) 
CREATE INDEX IX_TipoCursoMateria on TipoCursoMateria(idTipoCursoMateria) 
CREATE INDEX IX_TipoDocumento on TipoDocumento(idTipoDocumento)
CREATE INDEX IX_TipoOrganizacion on TipoOrganizacion(idTipoOrganizacion)
CREATE INDEX IX_TipoPago on TipoPago(idTipoPago)
CREATE INDEX IX_TipoPreparatoria on TipoPreparatoria(idTipoPreparatoria) 
CREATE INDEX IX_TipoSangre on TipoSangre(idTipoSangre)
CREATE INDEX IX_TipoServicio on TipoServicio(idTipoServicio)
CREATE INDEX IX_TipoUrgencia on TipoUrgencia(idTipoUrgencia)
CREATE INDEX IX_TipoUsuario on TipoUsuario(idTipoUsuario)
CREATE INDEX IX_Turno on Turno(idTurno) 
CREATE INDEX IX_Tutor on Tutor(idTutor) 
CREATE INDEX IX_Usuario on Usuario(idUsuario) 
CREATE INDEX IX_Visita on Visita(idVisita) 
CREATE INDEX IX_Zona on Zona(idZona) 
CREATE INDEX IX_AlumnoCursoExtra on AlumnoCursoExtra(idAlumnoCursoExtra) 
CREATE INDEX IX_AlumnoDocumento on AlumnoDocumento(idAlumnoDocumento) 
CREATE INDEX IX_AlumnoTutor on AlumnoTutor(idAlumnoTutor) 
CREATE INDEX IX_AsignaturaCarrera on AsignaturaCarrera(idAsignaturaCarrera) 
CREATE INDEX IX_EmpleadoDocumento on EmpleadoDocumento(idEmpleadoDocumento) 
--TIPO USUARIO


ALTER TABLE Usuario
ADD CONSTRAINT FKUsuarioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Usuario
ADD CONSTRAINT FKUsuarioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Usuario
ADD CONSTRAINT FKUsuarioUsuarioTipoUsuario FOREIGN KEY (idTipoUsuario)
REFERENCES TipoUsuario(idTipoUsuario)

ALTER TABLE Actividad
ADD CONSTRAINT FKActividadUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Actividad
ADD CONSTRAINT FKActividadUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Actividad
ADD CONSTRAINT FKActividadTipoActividad FOREIGN KEY (idTipoActividad)
REFERENCES TipoActividad(idTipoActividad)

ALTER TABLE ActivoFijo
ADD CONSTRAINT FKActivoFijoTipoActivoFijo FOREIGN KEY (idTipoActivoFijo)
REFERENCES TipoActivoFijo(idTipoActivoFijo)

ALTER TABLE ActivoFijo
ADD CONSTRAINT FKActivoFijoArea FOREIGN KEY (idArea)
REFERENCES Area(idArea)

ALTER TABLE ActivoFijo
ADD CONSTRAINT FKActivoFijoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE ActivoFijo
ADD CONSTRAINT FKActivoFijoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoCarrera FOREIGN KEY (idCarrera)
REFERENCES Carrera(idCarrera)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoPreparatoria FOREIGN KEY (idPreparatoria)
REFERENCES Preparatoria(idPreparatoria)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoTurno FOREIGN KEY (idTurno)
REFERENCES Turno(idTurno)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)
 
ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoCiudadNacimiento FOREIGN KEY (idCiudadNacimiento)
REFERENCES Ciudad(idCiudad)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoGenero FOREIGN KEY (idGenero)
REFERENCES Genero(idGenero)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoInstitucionSalud FOREIGN KEY (idInstitucionSalud)
REFERENCES InstitucionSalud(idInstitucionSalud)

ALTER TABLE Alumno
ADD CONSTRAINT FKAlumnoTipoSangre FOREIGN KEY (idTipoSangre)
REFERENCES TipoSangre(idTipoSangre)

ALTER TABLE AlumnoCursoMateria
ADD CONSTRAINT FKAlumnoCursoMateriaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoCursoMateria
ADD CONSTRAINT FKAlumnoCursoMateriaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoCursoMateria
ADD CONSTRAINT FKAlumnoCursoMateriaAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoCursoMateria
ADD CONSTRAINT FKAlumnoCursoMateriaMateria FOREIGN KEY (idMateria)
REFERENCES Asignatura(idAsignatura)

ALTER TABLE AlumnoCursoMateria
ADD CONSTRAINT FKAlumnoCursoMateriaPeriodo FOREIGN KEY (idPeriodo)
REFERENCES Periodo(idPeriodo)

ALTER TABLE Area
ADD CONSTRAINT FKAreaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Area
ADD CONSTRAINT FKAreaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)


ALTER TABLE Area
ADD CONSTRAINT FKAreaEdificio FOREIGN KEY (idEdificio)
REFERENCES Edificio(idEdificio)

ALTER TABLE Asentamiento
ADD CONSTRAINT FKAsentamientoTipoAsentamiento FOREIGN KEY (idTipoAsentamiento)
REFERENCES TipoAsentamiento(idTipoAsentamiento)

ALTER TABLE Asentamiento
ADD CONSTRAINT FKAsentamientoCiudad FOREIGN KEY (idCiudad)
REFERENCES Ciudad(idCiudad)

ALTER TABLE Asentamiento
ADD CONSTRAINT FKAsentamientoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Asentamiento
ADD CONSTRAINT FKAsentamientoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Asignatura
ADD CONSTRAINT FKAsignaturaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Asignatura
ADD CONSTRAINT FKAsignaturaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocenteUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocenteUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocenteAsignatura FOREIGN KEY (idAsignatura)
REFERENCES Asignatura(idAsignatura)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocenteDocente FOREIGN KEY (idDocente)
REFERENCES Empleado(idEmpleado)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocenteHora FOREIGN KEY (idHora)
REFERENCES Hora(idHora)

ALTER TABLE AsignaturaDocente
ADD CONSTRAINT FKAsignaturaDocentePeriodo FOREIGN KEY (idPeriodo)
REFERENCES Periodo(idPeriodo)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadPeriodo FOREIGN KEY (idPeriodo)
REFERENCES Periodo(idPeriodo)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE AlumnoActividad
ADD CONSTRAINT FKAlumnoActividadActividad FOREIGN KEY (idActividad)
REFERENCES Actividad(idActividad)

ALTER TABLE AlumnoAsignaturaDocente
ADD CONSTRAINT FKAlumnoAsignaturaDocenteUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoAsignaturaDocente
ADD CONSTRAINT FKAlumnoAsignaturaDocenteUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoAsignaturaDocente
ADD CONSTRAINT FKAlumnoAsignaturaDocente_Alumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoAsignaturaDocente
ADD CONSTRAINT FKAlumnoAsignaturaDocente_AsignaturaDocente FOREIGN KEY (idAsignaturaDocente)
REFERENCES AsignaturaDocente(idAsignaturaDocente)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspirantePreparatoria FOREIGN KEY (idPreparatoria)
REFERENCES Preparatoria(idPreparatoria)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspiranteUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspiranteUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspiranteCiudadNacimiento FOREIGN KEY (idCiudadNacimiento)
REFERENCES Ciudad(idCiudad)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspiranteAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspiranteGenero FOREIGN KEY (idGenero)
REFERENCES Genero(idGenero)

ALTER TABLE Aspirante
ADD CONSTRAINT FKAspirantePais FOREIGN KEY (idPais)
REFERENCES Pais(idPais)

ALTER TABLE BibliotecaServicio
ADD CONSTRAINT FKBibliotecaServicioServicio FOREIGN KEY (idServicio)
REFERENCES Servicio(idServicio)

ALTER TABLE BibliotecaServicio
ADD CONSTRAINT FKBibliotecaServicioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE BibliotecaServicio
ADD CONSTRAINT FKBibliotecaServicioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE BibliotecaServicio
ADD CONSTRAINT FKBibliotecaServicioCarrera FOREIGN KEY (idCarrera)
REFERENCES Carrera(idCarrera)

ALTER TABLE BibliotecaServicio
ADD CONSTRAINT FKBibliotecaServicioTurno FOREIGN KEY (idTurno)
REFERENCES Turno(idTurno)

ALTER TABLE Carrera
ADD CONSTRAINT FKCarreraUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Carrera
ADD CONSTRAINT FKCarreraUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Ciudad
ADD CONSTRAINT FKCiudadEstado FOREIGN KEY (idEstado)
REFERENCES Estado(idEstado)

ALTER TABLE Ciudad
ADD CONSTRAINT FKCiudadUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Ciudad
ADD CONSTRAINT FKCiudadUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Contrato
ADD CONSTRAINT FKContratoEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE Contrato
ADD CONSTRAINT FKContratoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Contrato
ADD CONSTRAINT FKContratoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Consumible
ADD CONSTRAINT FKConsumibleUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Consumible
ADD CONSTRAINT FKConsumibleUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE CursoExtraordinario
ADD CONSTRAINT FKCursoExtraordinarioDocente FOREIGN KEY (idDocente)
REFERENCES Empleado(idEmpleado)

ALTER TABLE CursoExtraordinario
ADD CONSTRAINT FKCursoExtraordinarioTipoCursoMateria FOREIGN KEY (idTipoCursoMateria)
REFERENCES TipoCursoMateria(idTipoCursoMateria)

ALTER TABLE CursoExtraordinario
ADD CONSTRAINT FKCursoExtraordinarioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE CursoExtraordinario
ADD CONSTRAINT FKCursoExtraordinarioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Departamento
ADD CONSTRAINT FKDepartamentoArea FOREIGN KEY (idEdificio)
REFERENCES Edificio(idEdificio)

ALTER TABLE Departamento
ADD CONSTRAINT FKDepartamentoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Departamento
ADD CONSTRAINT FKDepartamentoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Documento
ADD CONSTRAINT FKDocumentoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Documento
ADD CONSTRAINT FKDocumentoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Documento
ADD CONSTRAINT FKDocumentoTipoDocumento FOREIGN KEY (idTipoDocumento)
REFERENCES TipoDocumento(idTipoDocumento)

ALTER TABLE Edificio
ADD CONSTRAINT FKEdificioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Edificio
ADD CONSTRAINT FKEdificioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioServicio FOREIGN KEY (idServicio)
REFERENCES Servicio(idServicio)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioTipoUrgencia FOREIGN KEY (idTipoUrgencia)
REFERENCES TipoUrgencia(idTipoUrgencia)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)


ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoIdPuesto FOREIGN KEY (idPuesto)
REFERENCES Puesto(idPuesto)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoIdGenero FOREIGN KEY (idGenero)
REFERENCES Genero(idGenero)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoPais FOREIGN KEY (idPais)
REFERENCES Pais(idPais)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoEstadoCivil FOREIGN KEY (idEstadoCivil)
REFERENCES EstadoCivil(idEstadoCivil)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)


ALTER TABLE Estado
ADD CONSTRAINT FKEstadoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Estado
ADD CONSTRAINT FKEstadoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE EstadoCivil
ADD CONSTRAINT FKEstadoCivilUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE EstadoCivil
ADD CONSTRAINT FKEstadoCivilUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Ficha
ADD CONSTRAINT FKFichaTurno FOREIGN KEY (idTurno)
REFERENCES Turno(idTurno)

ALTER TABLE Ficha
ADD CONSTRAINT FKFichaCarreraPrimera FOREIGN KEY (idCarreraPrimera)
REFERENCES Carrera(idCarrera)

ALTER TABLE Ficha
ADD CONSTRAINT FKFichaCarreraSegunda FOREIGN KEY (idCarreraSegunda)
REFERENCES Carrera(idCarrera)

ALTER TABLE Ficha
ADD CONSTRAINT FKFichaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Ficha
ADD CONSTRAINT FKFichaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Genero
ADD CONSTRAINT FKGeneroUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Genero
ADD CONSTRAINT FKGeneroUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Hora
ADD CONSTRAINT FKHoraUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Hora
ADD CONSTRAINT FKHoraUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE InstitucionSalud
ADD CONSTRAINT FKInstitucionSaludUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE InstitucionSalud
ADD CONSTRAINT FKInstitucionSaludUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Justificante
ADD CONSTRAINT FKJustificanteAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE Justificante
ADD CONSTRAINT FKJustificanteUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Justificante
ADD CONSTRAINT FKJustificanteUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Organizacion
ADD CONSTRAINT FKOrganizacionAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

ALTER TABLE Organizacion
ADD CONSTRAINT FKOrganizacionTipoOrganizacion FOREIGN KEY (idTipoOrganizacion)
REFERENCES TipoOrganizacion(idTipoOrganizacion)

ALTER TABLE Organizacion
ADD CONSTRAINT FKOrganizacionUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Organizacion
ADD CONSTRAINT FKOrganizacionUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoTipoPago FOREIGN KEY (idTipoPago)
REFERENCES TipoPago(idTipoPago)

ALTER TABLE	Pago
ADD CONSTRAINT FKPagoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE	Pais
ADD CONSTRAINT FKPaisUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Pais
ADD CONSTRAINT FKPaisUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE	Periodo
ADD CONSTRAINT FKPeriodoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Periodo
ADD CONSTRAINT FKPeriodoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Preparatoria
ADD CONSTRAINT FKPreparatoriaAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

ALTER TABLE Preparatoria
ADD CONSTRAINT FKPreparatoriaTipoPreparatoria FOREIGN KEY (idTipoPreparatoria)
REFERENCES TipoPreparatoria(idTipoPreparatoria)

ALTER TABLE Preparatoria
ADD CONSTRAINT FKPreparatoriaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Preparatoria
ADD CONSTRAINT FKPreparatoriaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE PrestamoPrefectura
ADD CONSTRAINT FKPrestamoPrefecturaActivoFijo FOREIGN KEY (idActivoFijo)
REFERENCES ActivoFijo(idActivoFijo)

ALTER TABLE PrestamoPrefectura
ADD CONSTRAINT FKPrestamoPrefecturaDocente FOREIGN KEY (idDocente)
REFERENCES Empleado(idEmpleado)

ALTER TABLE PrestamoPrefectura
ADD CONSTRAINT FKPrestamoPrefecturaPrefecto FOREIGN KEY (idPrefecto)
REFERENCES Empleado(idEmpleado)

ALTER TABLE PrestamoPrefectura
ADD CONSTRAINT FKPrestamoPrefecturaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE PrestamoPrefectura
ADD CONSTRAINT FKPrestamoPrefecturaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Puesto
ADD CONSTRAINT FKPuestoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Puesto
ADD CONSTRAINT FKPuestoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Residencia
ADD CONSTRAINT FKResidenciaAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE Residencia
ADD CONSTRAINT FKResidenciaEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE Residencia
ADD CONSTRAINT FKResidenciaOrganizacion FOREIGN KEY (idOrganizacion)
REFERENCES Organizacion(idOrganizacion)

ALTER TABLE Residencia
ADD CONSTRAINT FKResidenciaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Residencia
ADD CONSTRAINT FKResidenciaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Servicio
ADD CONSTRAINT FKServicioTipoServicio FOREIGN KEY (idTipoServicio)
REFERENCES TipoServicio(idTipoServicio)

ALTER TABLE Servicio
ADD CONSTRAINT FKServicioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Servicio
ADD CONSTRAINT FKServicioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE ServicioSocial
ADD CONSTRAINT FKServicioSocialAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE ServicioSocial
ADD CONSTRAINT FKServicioSocialOrganizacion FOREIGN KEY (idOrganizacion)
REFERENCES Organizacion(idOrganizacion)

ALTER TABLE ServicioSocial
ADD CONSTRAINT FKServicioSocialUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE ServicioSocial
ADD CONSTRAINT FKServicioSocialUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Software
ADD CONSTRAINT FKSoftwareUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Software
ADD CONSTRAINT FKSoftwareUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SoftwareEquipo
ADD CONSTRAINT FKSoftwareEquipoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE SoftwareEquipo
ADD CONSTRAINT FKSoftwareEquipoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SoftwareEquipo
ADD CONSTRAINT FKSoftwareEquipoSoftware FOREIGN KEY (idSoftware)
REFERENCES Software(idSoftware)

ALTER TABLE SoftwareEquipo
ADD CONSTRAINT FKSoftwareEquipoEquipo FOREIGN KEY (idActivoFijo)
REFERENCES ActivoFijo(idActivoFijo)

ALTER TABLE SolicitudLaboratorio
ADD CONSTRAINT FKSolicitudLaboratorioEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE SolicitudLaboratorio
ADD CONSTRAINT FKSolicitudLaboratorioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudLaboratorio
ADD CONSTRAINT FKSolicitudLaboratorioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudConsumible
ADD CONSTRAINT FKSolicitudConsumibleUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudConsumible
ADD CONSTRAINT FKSolicitudConsumibleUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudConsumible
ADD CONSTRAINT FKSolicitudConsumibleSolicitudLaboratorio FOREIGN KEY (idSolicitudLaboratorio)
REFERENCES SolicitudLaboratorio(idSolicitudLaboratorio)

ALTER TABLE SolicitudConsumible
ADD CONSTRAINT FKSolicitudConsumibleConsumible FOREIGN KEY (idConsumible)
REFERENCES Consumible(idConsumible)

ALTER TABLE SolicitudSoftware
ADD CONSTRAINT FKSolicitudSoftwareUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudSoftware
ADD CONSTRAINT FKSolicitudSoftwareUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudSoftware
ADD CONSTRAINT FKSolicitudSoftwareSolicitudLaboratorio FOREIGN KEY (idSolicitudLaboratorio)
REFERENCES SolicitudLaboratorio(idSolicitudLaboratorio)

ALTER TABLE SolicitudSoftware
ADD CONSTRAINT FKSolicitudSoftwareSoftware FOREIGN KEY (idSoftware)
REFERENCES Software(idSoftware)

ALTER TABLE SolicitudHerramienta
ADD CONSTRAINT FKSolicitudHerramientaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudHerramienta
ADD CONSTRAINT FKSolicitudHerramientaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE SolicitudHerramienta
ADD CONSTRAINT FKSolicitudHerramientaSolicitudLaboratorio FOREIGN KEY (idSolicitudLaboratorio)
REFERENCES SolicitudLaboratorio(idSolicitudLaboratorio)

ALTER TABLE SolicitudHerramienta
ADD CONSTRAINT FKSolicitudHerramientaHerramienta FOREIGN KEY (idActivoFijo)
REFERENCES ActivoFijo(idActivoFijo)


ALTER TABLE TipoActivoFijo
ADD CONSTRAINT FKTipoActivoFijoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoActivoFijo
ADD CONSTRAINT FKTipoActivoFijoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoActividad
ADD CONSTRAINT FKTipoActividadUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoActividad
ADD CONSTRAINT FKTipoActividadUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoAsentamiento
ADD CONSTRAINT FKTipoAsentamientoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoAsentamiento
ADD CONSTRAINT FKTipoAsentamientoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoCursoMateria
ADD CONSTRAINT FKTipoCursoMateriaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoCursoMateria
ADD CONSTRAINT FKTipoCursoMateriaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoDocumento
ADD CONSTRAINT FKTipoDocumentoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoDocumento
ADD CONSTRAINT FKTipoDocumentoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoOrganizacion
ADD CONSTRAINT FKTipoOrganizacionUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoOrganizacion
ADD CONSTRAINT FKTipoOrganizacionUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)


ALTER TABLE TipoPago
ADD CONSTRAINT FKTipoPagoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoPago
ADD CONSTRAINT FKTipoPagoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoPreparatoria
ADD CONSTRAINT FKTipoPreparatoriaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoPreparatoria
ADD CONSTRAINT FKTipoPreparatoriaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoSangre
ADD CONSTRAINT FKTipoSangreUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoSangre
ADD CONSTRAINT FKTipoSangreUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoServicio
ADD CONSTRAINT FKTipoServicioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoServicio
ADD CONSTRAINT FKTipoServicioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoUrgencia
ADD CONSTRAINT FKTipoUrgenciaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoUrgencia
ADD CONSTRAINT FKTipoUrgenciaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoUsuario
ADD CONSTRAINT FKTipoUsuarioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoUsuario
ADD CONSTRAINT FKTipoUsuarioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Turno
ADD CONSTRAINT FKTurnoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Turno
ADD CONSTRAINT FKTurnoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Tutor
ADD CONSTRAINT FKTutorAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

ALTER TABLE Tutor
ADD CONSTRAINT FKTutorUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Tutor
ADD CONSTRAINT FKTutorUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Visita
ADD CONSTRAINT FKVisitaEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)


ALTER TABLE Visita
ADD CONSTRAINT FKVisitaCarrera FOREIGN KEY (idCarrera)
REFERENCES Carrera(idCarrera)

ALTER TABLE Visita
ADD CONSTRAINT FKVisitaActivoFijo FOREIGN KEY (idActivoFijo)
REFERENCES ActivoFijo(idActivoFijo)

ALTER TABLE Visita
ADD CONSTRAINT FKVisitaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Visita
ADD CONSTRAINT FKVisitaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Zona
ADD CONSTRAINT FKZonaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Zona
ADD CONSTRAINT FKZonaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoCursoExtra
ADD CONSTRAINT FKAlumnoCursoExtraAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoCursoExtra
ADD CONSTRAINT FKAlumnoCursoExtraCursoExtraordinario FOREIGN KEY (idCursoExtraordinario)
REFERENCES CursoExtraordinario(idCursoExtraordinario)

ALTER TABLE AlumnoCursoExtra
ADD CONSTRAINT FKAlumnoCursoExtraPago FOREIGN KEY (idPago)
REFERENCES Pago(idPago)

ALTER TABLE AlumnoCursoExtra
ADD CONSTRAINT FKAlumnoCursoExtraUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoCursoExtra
ADD CONSTRAINT FKAlumnoCursoExtraUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoDocumento
ADD CONSTRAINT FKAlumnoDocumentoAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoDocumento
ADD CONSTRAINT FKAlumnoDocumentoDocumento FOREIGN KEY (idDocumento)
REFERENCES Documento(idDocumento)

ALTER TABLE AlumnoDocumento
ADD CONSTRAINT FKAlumnoDocumentoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoDocumento
ADD CONSTRAINT FKAlumnoDocumentoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoTutor
ADD CONSTRAINT FKAlumnoTutorAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE AlumnoTutor
ADD CONSTRAINT FKAlumnoTutorTutor FOREIGN KEY (idTutor)
REFERENCES Tutor(idTutor)

ALTER TABLE AlumnoTutor
ADD CONSTRAINT FKAlumnoTutorUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AlumnoTutor
ADD CONSTRAINT FKAlumnoTutorUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE AsignaturaCarrera
ADD CONSTRAINT FKAsignaturaCarreraAsignatura FOREIGN KEY (idAsignatura)
REFERENCES Asignatura(idAsignatura)

ALTER TABLE AsignaturaCarrera
ADD CONSTRAINT FKAsignaturaCarreraCarrera FOREIGN KEY (idCarrera)
REFERENCES Carrera(idCarrera)

ALTER TABLE AsignaturaCarrera
ADD CONSTRAINT FKAsignaturaCarreraUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE AsignaturaCarrera
ADD CONSTRAINT FKAsignaturaCarreraUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE EmpleadoDocumento
ADD CONSTRAINT FKEmpleadoDocumentoEmpleado FOREIGN KEY (idEmpleado)
REFERENCES Empleado(idEmpleado)

ALTER TABLE EmpleadoDocumento
ADD CONSTRAINT FKEmpleadoDocumentoDocumento FOREIGN KEY (idDocumento)
REFERENCES Documento(idDocumento)

ALTER TABLE EmpleadoDocumento
ADD CONSTRAINT FKEmpleadoDocumentoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE EmpleadoDocumento
ADD CONSTRAINT FKEmpleadoDocumentoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

INSERT INTO TipoUsuario(fechaCrea)
VALUES (GETDATE())

INSERT INTO Usuario(apellidoMaterno,apellidoPaterno,nombreCompleto,idTipoUsuario,correo,clave,fechaCrea)
VALUES('Lerma','Hernandez','Jesus Alejandro',1,'wanderingbard@outlook.es','contraseña',GETDATE())

INSERT INTO TipoAsentamiento(nombre,idUsuarioCrea,fechaCrea)
VALUES ('Tipo Asentamiento 1',1,GETDATE()),
	   ('Tipo Asentamiento 2',1,GETDATE()),
	   ('Tipo Asentamiento 3',1,GETDATE()),
	   ('Tipo Asentamiento 4',1,GETDATE());

INSERT INTO Zona(nombre,idUsuarioCrea,fechaCrea)
VALUES('Zona 1',1,GETDATE()),
      ('Zona 2',1,GETDATE()),
	  ('Zona 3',1,GETDATE()),
	  ('Zona 4',1,GETDATE()),
	  ('Zona 5',1,GETDATE());

INSERT INTO Estado(nombre,idUsuarioCrea,fechaCrea)
VALUES('Nombre',1,GETDATE()),
      ('Nombre 2',1,GETDATE()),
	  ('Nombre 3',1,GETDATE()),
	  ('Nombre 4',1,GETDATE()),
	  ('Nombre 5',1,GETDATE());

INSERT INTO Ciudad(nombre, codigo, idEstado,idUsuarioCrea,fechaCrea)
VALUES('Nombre',0101,1,1,GETDATE()),
      ('Nombre 2',0101,1,1,GETDATE()),
	  ('Nombre 3',0101,1,1,GETDATE()),
	  ('Nombre 4',0101,1,1,GETDATE()),
	  ('Nombre 5',0101,1,1,GETDATE());

INSERT INTO Asentamiento(nombre, codigoPostal, idTipoAsentamiento, idCiudad, idZona,idUsuarioCrea,fechaCrea)
VALUES('Nombre 1','00000',1,1,1,1,GETDATE()),
      ('Nombre 2','00000',1,1,1,1,GETDATE()),
	  ('Nombre 3','00000',1,1,1,1,GETDATE()),
	  ('Nombre 4','00000',1,1,1,1,GETDATE()),
	  ('Nombre 5','00000',1,1,1,1,GETDATE());

INSERT INTO Carrera(nombre, clave,idUsuarioCrea,fechaCrea)
	Values ('Ingenieria Informatica', 'Ing01',1,GETDATE()),
        	('Ingenieria Electronica', 'Ing02',1,GETDATE()),
        	('Ingenieria Mecanica', 'Ing03',1,GETDATE()),
        	('Ingenieria Industrial', 'Ing04',1,GETDATE()),
        	('Ingenieria Gestion Empresarial', 'Ing05',1,GETDATE()),
        	('Ingenieria Energias Renovables', 'Ing06',1,GETDATE());

INSERT INTO Turno (nombre, horaInicio, horaFinal,idUsuarioCrea,fechaCrea)
	Values ('Matutino', '7:00', '14:00',1,GETDATE()),
        	('Vespertino', '17:00', '22:00',1,GETDATE());

INSERT INTO Edificio(nombre,idUsuarioCrea,fechaCrea)
	Values ('Edificio 1',1,GETDATE()),
        	('Edificio 2',1,GETDATE()),
        	('Edificio 3',1,GETDATE()),
        	('Edificio 4',1,GETDATE());

INSERT INTO Area(nombre, idEdificio,idUsuarioCrea,fechaCrea)
	Values ('Aula 1', 1,1,GETDATE()),
        	('Aula 2', 1,1,GETDATE()),
        	('Aula 3', 1,1,GETDATE()),
        	('Lab. Cisco', 1,1,GETDATE()),
        	('Lab. Sistemas operativos', 1,1,GETDATE()),
        	('Lab. Quimica', 1,1,GETDATE()),
        	('Caja', 1,1,GETDATE()),
        	('Biblioteca', 3,1,GETDATE()),
        	('Psicologia', 4,1,GETDATE()),
        	('Prefectura', 2,1,GETDATE());

INSERT INTO Departamento(nombre,idEdificio,idUsuarioCrea,fechaModifica)
	Values ('Finanzas', 1,1,GETDATE()),
        	('Academico', 1,1,GETDATE()),
        	('Recursos humanos', 1,1,GETDATE()),
        	('Vinculacion', 1,1,GETDATE()),
        	('Servicios administracion', 1,1,GETDATE()),
        	('Planeacion', 1,1,GETDATE()),
        	('Servicios escolares', 1,1,GETDATE()),
        	('Estudios profesionales', 1,1,GETDATE()),
        	('Gestion Tecnologica', 2,1,GETDATE()),
        	('Ingles', 2,1,GETDATE());

INSERT INTO TipoPreparatoria(nombre,idUsuarioCrea,fechaCrea)
	Values ('Estatal',1,GETDATE()),
        	('Federal',1,GETDATE()),
        	('Privada',1,GETDATE());

INSERT INTO Preparatoria(nombre, calle, numero, idAsentamiento, idTipoPreparatoria,idUsuarioCrea,fechaCrea)
		Values ('Preparatoria 1', 'Calle 20', '250', 1, 1,1,GETDATE()),
        		('Preparatoria 2', 'Calle 30', '110', 1, 1,1,GETDATE()),
        		('Preparatoria 3', 'Calle 40', '120', 1, 2,1,GETDATE()),
        		('Preparatoria 4', 'Calle 22', '130', 1, 2,1,GETDATE()),
        		('Preparatoria 5', 'Calle 18', '140', 1, 3,1,GETDATE()),
        		('Preparatoria 6', 'Calle 14', '160', 1, 3,1,GETDATE());

INSERT INTO Ficha(folio, fecha, idTurno, idCarreraPrimera, idCarreraSegunda,idUsuarioCrea,fechaCrea)
	Values ('F0100', GETDATE(), 1, 1, 2,1,GETDATE()),
        	('F0101', GETDATE(), 2, 2, 1,1,GETDATE()),
        	('F0102', GETDATE(), 1, 4, 2,1,GETDATE()),
        	('F0103', GETDATE(), 1, 3, 2,1,GETDATE()),
        	('F0104', GETDATE(), 2, 6, 2,1,GETDATE()),
        	('F0105', GETDATE(), 1, 4, 1,1,GETDATE()),
        	('F0106', GETDATE(), 2, 2, 4,1,GETDATE());

INSERT INTO TipoDocumento(nombre,idUsuarioCrea,fechaCrea)
VALUES('Escolares',1,GETDATE()),
      ('Personales',1,GETDATE());

INSERT INTO Documento(nombre, descripcion, idTipoDocumento,idUsuarioCrea,fechaCrea)
	Values ('Acta de naciemiento', 'Acta de nacimiento vigente', 1,1,GETDATE()),
        	('Vigencia del seguro', 'Vigencia del seguro', 1,1,GETDATE()),
        	('Identificacion del INE', 'Identificacion del INE vigente', 1,1,GETDATE()),
        	('CURP', 'CURP vigente', 1,1,GETDATE()),
        	('Certificado de estudio tecnico superior', 'Certificado de estudio vigente', 1,1,GETDATE()),
        	('Constancia de liberacion del servicio social', 'Constancia de liberacion del servicio social vigente', 1,1,GETDATE());

INSERT INTO Pais(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO Genero(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE())

INSERT INTO Aspirante(nombre, apellidoPaterno, apellidoMaterno, curp, correo, telefono, idGenero, idPreparatoria, promedioGeneral, fechaEgreso, fechaNacimiento, idCiudadNacimiento, calle, numeroInterior, numeroExterior,idPais, idAsentamiento,idUsuarioCrea,fechaCrea)
	Values ('Juan Antonio', 'Quintana', 'de la Barrera', 'ABCD010101HCLHNDA1', 'JuanEscutia@gmail.com', '8661232060', 2, 3, 80, '10-06-2021', '10-04-2001', 1, 'calle 10', null, '102',1,1,1,GETDATE()),
        	('Daniel Agustin', 'Melgar', 'Flores', 'ABCD010101HCLHNDA2', 'AgustinMelgar@gmail.com', '8661232061', 2, 3, 90, '10-06-2021', '10-07-2001', 1, 'calle 11', null, '103',1,1,1,GETDATE()),
        	('Vicente Felipe', 'Suarez', 'Campos', 'ABCD010101HCLHNDA3', 'VicenteSuarez@gmail.com', '8661232062', 2, 3, 95, '10-06-2021', '10-05-2001', 1, 'calle 12', null, '104',1,1,1,GETDATE()),
        	('Francisco', 'Marquez', 'Sanchez', 'ABCD010101HCLHNDA4', 'FranciscoMarquez@gmail.com', '8661232063', 2, 4, 75, '10-06-2021', '10-06-2001', 1, 'calle 13', null, '105',1,1,1,GETDATE()),
        	('Luis Fernando', 'Montes', 'de Oca', 'ABCD010101HCLHNDA5', 'FernandoMontesdeOca@gmail.com', '8661232064', 2, 4, 78, '10-06-2021', '10-01-2001', 1, 'calle 14', null, '106',1,1,1,GETDATE()),
        	('Juan Jeoel', 'Escutia', 'Garcia', 'ABCD010101HCLHNDA6', 'JuanEscutia@gmail.com', '8661232065', 2, 5, 82, '10-06-2021', '10-03-2001', 1, 'calle 15', null, '107',1,1,1,GETDATE());

INSERT INTO InstitucionSalud(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE())

INSERT INTO TipoSangre(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE())

INSERT INTO Alumno (matricula, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, curp, rfc, idGenero, discapacidad, lenguaIndigena, nss, idInstitucionSalud, telefono, correoPersonal, correoInstitucional, idCarrera, semestre, idTurno, idPreparatoria, promedioGeneralPrepa, calle, numeroInterior, numeroExterior, idAsentamiento, idCiudadNacimiento, idTipoSangre, alergia, lugarTrabajo, horarioTrabajo,idUsuarioCrea,fechaCrea)
	VALUES ('I19203430', 'Pedro David', 'Chavarria', 'Contreras', '2001-06-09', 'PDCC010906HCLHNDA0', 'ASDFGHJKL1010', 2, null, null, '12345678910', 1, '8662006590', 'Pedro@gmail.com', 'Pedro@tec.com.mx', 1, 7, 1, 3, 90, 'Calle 1', null, '201', 1, 1, 1, null, null, null,1,GETDATE()),
	('I19203431', 'Samuel Alonso', 'Jimenez', 'Gonzales', '2001-05-04', 'PDCC010906HCLHNDA1', 'ASDFGHJKL1011', 2, null, null, '12345678911', 1, '8662006591', 'Samuel@gmail.com', 'Samuel@tec.com.mx', 2, 5, 2, 3, 90, 'Calle 15', null, '13', 1, 1, 1, null, null, null,1,GETDATE()),
	('I19203432', 'Erica Berenice', 'Tovar', 'Martinez', '2000-06-08', 'PDCC010906HCLHNDA2', 'ASDFGHJKL1012', 1, null, null, '12345678912', 1, '8662006592', 'Erica@gmail.com', 'Erica@tec.com.mx', 3, 7, 1, 3, 87, 'Calle 4', null, '24', 1, 1, 1, null, null, null,1,GETDATE()),
	('I19203433', 'Daniela', 'Lopez', 'Araya', '2002-02-06', 'PDCC010906HCLHNDA3', 'ASDFGHJKL1013', 1, null, null, '12345678913', 1, '8662006593', 'Daniela@gmail.com', 'Daniela@tec.com.mx', 2, 3, 2, 3, 85, 'Calle 18', null, '306', 1, 1, 1, null, null, null,1,GETDATE()),
	('I19203434', 'Angel Eduardo', 'Lugo', 'Montes', '2001-06-05', 'PDCC010906HCLHNDA4', 'ASDFGHJKL1014', 2, null, null, '12345678914', 1, '8662006594', 'Angel@gmail.com', 'Angel@tec.com.mx', 1, 9, 1, 3, 90, 'Calle 10', null, '20', 1, 1, 1, null, null, null,1,GETDATE());


INSERT INTO Tutor(nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, curp, telefono, numeroInterior, numeroExterior, calle, idAsentamiento,idUsuarioCrea,fechaCrea)
	VALUES ('Hector', 'Garcia', 'Moreno', '1985-05-03', 'ABCD010203HCLHNDA1', '8661002561', null, '50', 'Calle 5', 1,1,GETDATE()),
	('Samuel', 'Lopez', 'Dominguez', '1985-09-07', 'ABCD010203HCLHNDA2', '8661002562', '24', '62', 'Calle 4', 1,1,GETDATE()),
	('Fatima Berenice', 'Dias', 'Martinez', '1998-07-09', 'ABCD010203HCLHNDA3', '8661002563', null, '115', 'Calle 45', 1,1,GETDATE()),
	('Carlos Alberto', 'Montes', 'De la Cruz', '1981-11-03', 'ABCD010203HCLHNDA4', '8661002564', '5', '56', 'Calle 20', 1,1,GETDATE()),
	('Jared Roberto', 'Chavez', 'Rodriguez', '1978-01-07', 'ABCD010203HCLHNDA5', '8661002565', null, '156', 'Calle 6', 1,1,GETDATE()),
	('Ana Victoria', 'Ruiz', 'Garza', '1995-05-05', 'ABCD010203HCLHNDA6', '8661002566', '46', '402', 'Calle 11', 1,1,GETDATE()),
	('Pablo Alfredo', 'Almanza', 'Moreno', '1994-08-04', 'ABCD010203HCLHNDA7', '8661002567', null, '335', 'Calle 32', 1,1,GETDATE());


INSERT INTO Puesto(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO EstadoCivil(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE());

INSERT INTO Empleado(curp, nss, nombre, apellidoMaterno, apellidoPaterno, correoElectronico, salario, telefono,idPuesto, idGenero, idPais, idAsentamiento, calle, numeroExterior, numeroInterior, fechaNacimiento, idEstadoCivil,idUsuarioCrea,fechaCrea)
	VALUES ('ASDF010203HCLHNDE1', '12345678901', 'Felipe Hector', 'Gonzales', 'Gutierrez', 'Felipe@gmail.com', 3500, '8662309411',2, 2, 1, 1,'calle 11', '112', null, '1985-03-05', 1,1,GETDATE()),
	('ASDF010203HCLHNDE2', '12345678902', 'Rosa Andrea', 'Salinas', 'Sanchez', 'Andrea@gmail.com', 3500, '8662309411',2, 1, 1, 1,'calle 11', '56', null, '1995-05-06', 1,1,GETDATE()),
	('ASDF010203HCLHNDE3', '12345678903', 'Javier Manuel', 'Cantu', 'Garcia', 'Manuel@gmail.com', 3000, '8662309411',2, 2, 1, 1, 'calle 11', '12', null, '1988-07-01', 1,1,GETDATE()),
	('ASDF010203HCLHNDE4', '12345678903', 'Luis Romero', 'Gonzales', 'De Leon', 'Romero@gmail.com', 3000, '8662309411',2, 2, 1, 1, 'calle 14', '18', null, '1979-09-02', 1,1,GETDATE()),
	('ASDF010203HCLHNDE5', '12345678901', 'Paty Cecilia', 'Arevalo', 'Huitron', 'Paty@gmail.com', 3500, '8662309411',2, 1, 1, 1, 'calle 15', '665', '45', '1985-11-07', 1,1,GETDATE()),
	('ASDF010203HCLHNDE6', '12345678901', 'Carolina', 'Alferes', 'Morales', 'Carolina@gmail.com', 3500, '8662309411',2, 1, 1, 1, 'calle 16', '132', null, '1982-05-06', 1,1,GETDATE()),
	('ASDF010203HCLHNDE7', '12345678901', 'Santiago Manuel', 'Perez', 'Soto', 'Satiago@gmail.com', 3000, '8662309411',2, 2, 1, 1, 'calle 17', '354', null, '1981-05-02', 1,1,GETDATE());

INSERT INTO TipoServicio(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO Servicio(nombre, idTipoServicio,idUsuarioCrea,fechaCrea)
	VALUES ('Prestamo de libro', 1,1,GETDATE()),
        	('Uso de computador', 1,1,GETDATE()),
        	('Uso de libro', 1,1,GETDATE()),
        	('Usod de computador', 2,1,GETDATE()),
        	('Visita medica', 3,1,GETDATE());

INSERT INTO BibliotecaServicio(fecha, idServicio, idPuesto, idCarrera, idTurno,idUsuarioCrea,fechaCrea)
	VALUES ('2022-01-12', 1, 1, null, 1,1,GETDATE()),
        	('2022-12-01', 1, 3, null, 1,1,GETDATE()),
        	('2022-12-02', 2, null, 2, 1,1,GETDATE()),
        	('2022-12-03', 3, null, 3, 1,1,GETDATE()),
        	('2022-12-04', 2, null, 1, 1,1,GETDATE()),
        	('2022-05-12', 3, 1, null, 2,1,GETDATE()),
        	('2022-12-05', 1, null, 4, 2,1,GETDATE());

INSERT INTO TipoUrgencia(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO EnfermeriaServicio(fecha, idEmpleado, idAlumno, idServicio, idTipoUrgencia, observacion,idUsuarioCrea,fechaCrea)
	VALUES ('2022-12-01', 5, null, 5, 1, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),   
        	('2022-12-01', null, 5, 5, 2, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),    	 
        	('2022-12-03', 4, null, 5, 1, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),    	 
        	('2022-12-04', null, 2, 5, 2, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),
        	('2022-12-05', null, 3, 5, 2, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),    	 
        	('2022-12-07', 3, null, 5, 1, 'El diagnostico que se hizo, fue: ...',1,GETDATE()),            	 
        	('2022-12-09', null, 4, 5, 3, 'El diagnostico que se hizo, fue: ...',1,GETDATE());   

INSERT INTO TipoCursoMateria(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE());

 --El cammpo idTipoCursoMateria es tabla de Postgresql
INSERT INTO CursoExtraordinario(idTipoCursoMateria, idDocente, fechaInicio, fechaFinal, totalHoras, totalAlumnos, precio, precioIndividual, idUsuarioCrea)
	VALUES (1, 1, '2021-02-09', '2021-05-09', 60, 20, 250, 50, 1),
        	(1, 2, '2021-02-09', '2021-05-09', 60, 23, 250, 50, 1),
        	(2, 2, '2021-02-09', '2021-05-09', 50, 5, 500, 250, 1),
        	(2, 3, '2021-02-09', '2021-05-09', 50, 9, 500, 250, 1),
        	(2, 1, '2021-02-09', '2021-05-09', 45, 14, 500, 250, 1);

INSERT INTO TipoPago(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO Pago(idAlumno,idTipoPago,folio,monto, idUsuarioCrea)
    VALUES (1, 2, '000456789','300', 1),
            (2,  3, '000674822', '500', 1),
            (3,  8, '000987555', '460', 1),
            (5,  6, '000142678', '150', 1),
            (5,  7, '000259011', '600', 1);

 --Modificar los valores de idPago (La tabla pago debe estar encima)
INSERT INTO AlumnoCursoExtra(idAlumno, idCursoExtraordinario, idPago, idUsuarioCrea)
	VALUES (1, 1, 1, 1),
        	(1, 2, 1, 1),
        	(2, 1, 1, 1),
        	(3, 4, 1, 1),
        	(4, 3, 1, 1);

INSERT INTO AlumnoDocumento(idAlumno, idDocumento, fechaEntrega,idUsuarioCrea,fechaCrea)
	VALUES (1, 1, '2021-01-15', 1, GETDATE()),
        	(1, 2, '2021-01-15', 1, GETDATE()),
        	(1, 3, '2021-01-15', 1, GETDATE()),
        	(2, 1, '2021-01-15', 1, GETDATE()),
        	(3, 1, '2021-01-16', 1, GETDATE()),
        	(3, 4, '2021-01-16', 1, GETDATE()),
        	(4, 1, '2021-01-18', 1, GETDATE()),
        	(5, 1, '2021-01-19', 1, GETDATE()); --ys

INSERT INTO AlumnoTutor( idAlumno,idTutor, parentesco, contactoEmergencia, recogeDocumento, idUsuarioCrea, fechaCrea)
	VALUES (1, 1, 'padre', 1, 1, 1, GETDATE()),
        	(2, 2, 'padre', 1, 1, 1, GETDATE()),
        	(3, 3, 'hermana', 1, 1, 1, GETDATE()),
        	(4, 4, 'padre', 1, 1, 1, GETDATE()),
        	(5, 5, 'padre', 1, 1, 1, GETDATE());

INSERT INTO Asignatura (nombre, clave, horasPractica, horasTeoricas, creditos, idUsuarioCrea, fechaCrea)
    VALUES ('Fundamentos de Base de datos','001',12,12,5, 1, GETDATE()),
            ('Taller de Base de datos','002',12,12,5, 1, GETDATE()),
            ('Topicos de Base de datos','003',12,12,5, 1, GETDATE()),
            ('Administracion para informatica','004',12,12,5, 1, GETDATE()),
            ('Sistemas electrónicos para informática','005',12,12,5, 1, GETDATE());

INSERT INTO AsignaturaCarrera(idAsignatura, idCarrera, idUsuarioCrea, fechaCrea, idUsuarioModifica, fechaModifica)
	VALUES (1, 1, 1, GETDATE(), 1, GETDATE()),
	       (1, 2, 1, GETDATE(), 1, GETDATE()),
		   (1, 3, 1, GETDATE(), 1, GETDATE()),
		   (2, 1, 1, GETDATE(), 1, GETDATE()),
		   (3, 1, 1, GETDATE(), 1, GETDATE()),
		   (4, 1, 1, GETDATE(), 1, GETDATE()),
		   (4, 2, 1, GETDATE(), 1, GETDATE());

INSERT INTO EmpleadoDocumento(idEmpleado, idDocumento, fechaEntrega,idUsuarioCrea, fechaCrea)
	VALUES (1, 1, '2021-01-15', 1, GETDATE()),
        	(1, 2, '2021-01-15', 1, GETDATE()),
        	(2, 1, '2021-01-15', 1, GETDATE()),
        	(2, 2, '2021-01-15', 1, GETDATE()),
        	(3, 1, '2021-01-15', 1, GETDATE()),
        	(3, 2, '2021-01-15', 1, GETDATE()),
        	(3, 4, '2021-01-15', 1, GETDATE()),
        	(4, 1, '2021-01-15', 1, GETDATE());

INSERT INTO Periodo(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

-- La relacion de idCurso va a la tabla TipoCursoMateria y el idMateria va a la tabla Asignatura
INSERT INTO AlumnoCursoMateria(idAlumno,idMateria, calificacion, idPeriodo, idUsuarioCrea, fechaCrea)
	VALUES (1,  1, 80, 5, 1, GETDATE()),
        	(1,  1, 90, 1, 1, GETDATE()),
        	(2,  2, 95, 4, 1, GETDATE()),
        	(3,  2, 80, 1, 1, GETDATE()),
        	(3,  1, 80, 2, 1, GETDATE()),
        	(4,  3, 85, 3, 1, GETDATE()),
        	(5,  4, 95, 3, 1, GETDATE());


-- El campo de idTipoActividad es de PG
INSERT INTO TipoActividad(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO Actividad(nombre, creditoValor, idTipoActividad, idUsuarioCrea, fechaCrea)
VALUES ('Gimansio', 2, 1, 1, GETDATE()),
('Basquetbol', 2, 1, 1, GETDATE()),
('Musica', 2, 1, 1, GETDATE()),
('Futbol', 2, 3, 1, GETDATE()),
('Ajedrez', 2, 3, 1, GETDATE()),
('Voleibol', 2, 3, 1, GETDATE()),
('Banda de guerra', 2, 2, 1, GETDATE()),
('Danza', 2, 2, 1, GETDATE());

INSERT INTO TipoActivoFijo (nombre, idUsuarioCrea, fechaCrea)
 VALUES ('Equipo de computo', 1, GETDATE()),('Equipo Periferico', 1, GETDATE()),( 'Licencia Software', 1, GETDATE()), ('Mobiliario', 1, GETDATE()),('Maquinaria', 1, GETDATE());

INSERT INTO ActivoFijo (nombre,marca,modelo,descripcion,idArea,idTipoActivoFijo,idUsuarioCrea,fechaCrea)
VALUES ('Laptop','Dell','Latitude 3520',' Funcionando',1,1, 1, GETDATE()),
('Desktop','Dell','Optiplex 3090','Funcionando',1,1, 1, GETDATE()),
('Office','Microsof Office','Office 365','Funcionando',1,1, 1, GETDATE())

INSERT INTO Software (nombre,marca,version,descripcion, idUsuarioCrea, fechaCrea) 
VALUES ('Office','Microsoft Office', 'Office 365','Vigente', 1, GETDATE()),
('Cisco','Cisco Systems', 'Packet Tracer','Vigente', 1, GETDATE()),
('Visual Studio','Microsoft Visual Studio', 'Visual Studio','Vigente', 1, GETDATE());

INSERT INTO Usuario(nombreCompleto,apellidoPaterno,apellidoMaterno,correo,clave,idTipoUsuario, idUsuarioCrea, fechaCrea) 
VALUES ('Alexis','Villarreal','Tovar','avillarrealt@gmail.com','001',1, 1, GETDATE()),
 ('Pedro','Chavarria','Contreras','pchavarriac@gmail.com','002',1, 1, GETDATE()),
 ('Ruben','Riojas','Rodriguez','rriojasr@gmail.com','003',1, 1, GETDATE()),
 ('Sonia','Barboza','Elizondo','sbarbozae@gmail.com','004',1, 1, GETDATE()),
 ('Carmina','Gonzalez','Escobedo','cgonzaleze@gmail.com','005',1, 1, GETDATE());



INSERT INTO AlumnoActividad (idAlumno, idActividad, nivel, valorCredito, idPeriodo, idEmpleado, idUsuarioCrea, fechaCrea)
VALUES (1,2, 3,1, 1, 2, 1, GETDATE()),
(2,3, 3,1, 1, 2, 1, GETDATE()),
(3,1, 3,1, 1, 2, 1, GETDATE()),
(4,4, 3,1, 1, 2, 1, GETDATE());


INSERT INTO Contrato(fechaInicio,fechaFinal,cantidadHoras,duracion,salario,idEmpleado, idUsuarioCrea, fechaCrea)
VALUES ('2022-01-15','2023-05-12',12,4,2000,1, 1, GETDATE()),
('2022-01-15','2023-05-12',24,12,3000,2, 1, GETDATE()),
('2022-01-15','2023-05-12',16,6,2500,3, 1, GETDATE()),
('2022-01-15','2023-05-12',24,12,3500,4, 1, GETDATE());

INSERT INTO PrestamoPrefectura(idActivoFijo,fechaSalida,fechaRegreso,idDocente,idPrefecto, idUsuarioCrea, fechaCrea)
 VALUES (1, '2021-01-15','2022-01-15',1,1, 1, GETDATE()),
 (1, '2022-01-15','2023-05-12',2,2, 1, GETDATE()),
 (2, '2021-05-12','2022-01-15',3,2, 1, GETDATE()),
 (2, '2021-05-12','2022-01-15',1,1, 1, GETDATE()),
 (3, '2022-01-15','2022-01-15',1,2, 1, GETDATE());

INSERT INTO TipoOrganizacion(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
       (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO Organizacion(nombre,rfc,calle,numeroInterior,numeroExterior,idAsentamiento,idTipoOrganizacion, idUsuarioCrea, fechaCrea)
VALUES ('Alexis', '1233245362783', 'Praderas del Sur', '532', '715', 3,2, 1, GETDATE()),
('Adriana', '5357745338988', 'Mezquital', '778', '124', 1, 2, 1, GETDATE()),
('Josue', '4448742262581', 'Gudalupe', '93', '998', 2, 1, 1, GETDATE()),
('Maria', '2413248894577', 'Miravalle', '344', '3441', 2, 3, 1, GETDATE()),
('Manuel', '6784356342134', 'Hipodromo', '86','1001', 3, 2, 1, GETDATE());

INSERT INTO Residencia (idAlumno,idEmpleado,idOrganizacion,fechaInicio,fechaFinal, idUsuarioCrea, fechaCrea)
VALUES (1,1,1,'2020-03-08','2021-01-15', 1, GETDATE()),
	   (1,1,1,'2020-03-08','2021-01-15', 1, GETDATE()),
	   (2,3,1,'2020-03-08','2021-05-12', 1, GETDATE());


INSERT INTO ServicioSocial(idAlumno,idOrganizacion,fechaInicio,fechaFinal, idUsuarioCrea, fechaCrea)
VALUES (2,1,'2020-03-08','2020-03-08', 1, GETDATE()),
(1,2,'2020-03-08','2020-03-08', 1, GETDATE()),
(3,4,'2020-03-08','2021-01-15', 1, GETDATE()),
(4,2,'2020-03-08','2020-03-08', 1, GETDATE()),
(5,5,'2021-05-12','2022-01-15', 1, GETDATE());

INSERT INTO SolicitudLaboratorio (idEmpleado,fecha,numeroAlumnos,notas, idUsuarioCrea, fechaCrea)
VALUES (1,'2022-01-15',20,'Disponible', 1, GETDATE()),
(2,'2022-01-15',15,'Disponible', 1, GETDATE()),
(3,'2022-01-15',35,'Disponible', 1, GETDATE()),
(4,'2022-01-15', 20, 'Disponible', 1, GETDATE()),
(5,'2022-01-15', 15, 'Disponible', 1, GETDATE());

INSERT INTO Visita(idEmpleado,idCarrera,numeroAlumnos,semestre,fechaSolicitada,empresaPropuesta,idActivoFijo,objetivo, idUsuarioCrea, fechaCrea, idUsuarioModifica, fechaModifica)
VALUES (3,2,20,7,'2022-01-15','Corporativo Monclova','1','Curso de Auditoria', 1, GETDATE(), 1, GETDATE()),
       (1,1,15,7,'2022-01-15','Maxion Inmagusa','1','Conocimiento de la industria', 1, GETDATE(), 1, GETDATE()),   
	   (4,4,10,9,'2022-01-15','Google','1','Conocimiento de instalaciones', 1, GETDATE(), 1, GETDATE()),  
	   (5,5,8,7,'2022-01-15','Rebasa Monclova','1','Seguridad industrial', 1, GETDATE(), 1, GETDATE());
	   
INSERT INTO Justificante(idAlumno,motivo,fecha, idUsuarioCrea, fechaCrea)
VALUES (1, 'Temperatura' ,'2020-03-08', 1, GETDATE()),
(2, 'Infeccion de Oido', '2021-05-12', 1, GETDATE()),
(4, 'Fiebre', '2022-01-15', 1, GETDATE()),
(5, 'Dolor de Cabeza', '2022-01-15', 1, GETDATE()),
(3, 'Gripe', '2020-03-08', 1, GETDATE());

INSERT INTO SoftwareEquipo (idSoftware,idActivoFijo, idUsuarioCrea, fechaCrea)
VALUES (1,1, 1, GETDATE()),
       (2,1, 1, GETDATE()),
	   (3,1, 1, GETDATE()),
	   (1,3, 1, GETDATE());	
-------------------------------------------------
INSERT INTO Consumible(nombre,descripcion,cantidad,idUsuarioCrea,fechaCrea)
VALUES ('Nombre 1','Descripcion 1',100,1,GETDATE()),
       ('Nombre 2','Descripcion 2',200,1,GETDATE()),
	   ('Nombre 3','Descripcion 3',150,1,GETDATE()),
	   ('Nombre 4','Descripcion 4',100,1,GETDATE()),
	   ('Nombre 5','Descripcion 5',50,1,GETDATE());

INSERT INTO SolicitudConsumible (idSolicitudLaboratorio,idConsumible,idUsuarioCrea,fechaCrea)
VALUES (1,2,2,GETDATE()),
	   (2,3,3,GETDATE()),
	   (3,3,4,GETDATE()),
	   (4,4,5,GETDATE()),
	   (5,3,2,GETDATE());


INSERT INTO SolicitudHerramienta (idSolicitudLaboratorio,idActivoFijo,fecha,idUsuarioCrea,fechaCrea)
VALUES (1,1,GETDATE(),1,GETDATE()),
       (2,2,GETDATE(),1,GETDATE()),
	   (3,3,GETDATE(),1,GETDATE()),
	   (5,1,GETDATE(),1,GETDATE());

INSERT INTO SolicitudSoftware (idSolicitudLaboratorio, idSoftware,idUsuarioCrea,fechaCrea)
VALUES (1,1,1,GETDATE()),
       (2,2,1,GETDATE()),
	   (3,3,1,GETDATE());

-- Nuevos inserts :)
INSERT INTO AlumnoActividad(nivel, observacion, valorCredito, idPeriodo, idAlumno, idEmpleado, idActividad,idUsuarioCrea,fechaCrea)
    VALUES (1,'observacion del alumnoActividad...1', 1, 5, 5, 7, 7,1,GETDATE()),
            (2,'observacion del alumnoActividad...2', 1, 2, 5, 4, 3,1,GETDATE()),
            (1,'observacion del alumnoActividad...3', 2, 1, 3, 1, 1,1,GETDATE()),
            (2,'observacion del alumnoActividad...4', 2, 3, 1, 2, 1,1,GETDATE()),
            (1,'observacion del alumnoActividad...5', 1, 1, 2, 3, 2,1,GETDATE());

INSERT INTO Consumible(nombre, descripcion, cantidad,idUsuarioCrea,fechaCrea)
    VALUES ('consumibles 1', 'Esto sirve para...', 10,1,GETDATE()),
            ('consumibles 2', 'Esto sirve para...', 20,1,GETDATE()),
            ('consumibles 3', 'Esto sirve para...', 4,1,GETDATE()),
            ('consumibles 4', 'Esto sirve para...', 15,1,GETDATE()),
            ('consumibles 5', 'Esto sirve para...', 7,1,GETDATE());

INSERT INTO Hora(idUsuarioCrea,fechaCrea)
VALUES (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE()),
	   (1,GETDATE());

INSERT INTO AsignaturaDocente(idAsignatura, idDocente, idHora, idPeriodo,idUsuarioCrea,fechaCrea)
    VALUES (1, 2, 3, 5,1,GETDATE()),
            (1, 1, 5, 2,1,GETDATE()),
            (2, 2, 1, 2,1,GETDATE()),
            (2, 4, 3, 1,1,GETDATE()),
            (3, 3, 4, 3,1,GETDATE());

INSERT INTO AlumnoAsignaturaDocente(idAsignaturaDocente, idAlumno,idUsuarioCrea,fechaCrea)
    VALUES (2, 1,1,GETDATE()),
	       (2, 2,1,GETDATE()),
		   (2, 3,1,GETDATE()),
		   (2, 1,1,GETDATE()),
		   (3, 2,1,GETDATE());

USE TecMVA
GO

CREATE VIEW [EstadosCiviles] AS
SELECT A.idEstadoCivil,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.EstadoCivil') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[EstadoCivil] B
ON A.idEstadoCivil = B.idEstadoCivil
GO

CREATE VIEW [Generos] AS
SELECT A.idGenero,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.Genero') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[Genero] B
ON A.idGenero = B.idGenero
GO

CREATE VIEW [Horas] AS
SELECT A.idHora,A.descripcion,A.horaInicia,A.horaFinaliza,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.Hora') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[Hora] B
ON A.idHora = B.idHora
GO

CREATE VIEW [InstitucionesDeSalud] AS
SELECT A.idInstitucionSalud,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.InstitucionSalud') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[InstitucionSalud] B
ON A.idInstitucionSalud = B.idInstitucionSalud
GO

CREATE VIEW [Paises] AS
SELECT A.idPais,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.Pais') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[Pais] B
ON A.idPais = B.idPais
GO

CREATE VIEW [Periodos] AS
SELECT A.idPeriodo,A.fechaInicia,A.fechaFinaliza,A.año,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.Periodo') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[Periodo] B
ON A.idPeriodo = B.idPeriodo
GO

CREATE VIEW [Puestos] AS
SELECT A.idPuesto,A.nombre,A.salario,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.Puesto') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[Puesto] B
ON A.idPuesto = B.idPuesto
GO

CREATE VIEW [TiposDeActividad] AS
SELECT A.idTipoActividad,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoActividad') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoActividad] B
ON A.idTipoActividad = B.idTipoActividad
GO

CREATE VIEW [TiposCursosMaterias] AS
SELECT A.idTipoCursoMateria,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoCursoMateria') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoCursoMateria] B
ON A.idTipoCursoMateria = B.idTipoCursoMateria
GO

CREATE VIEW [TiposDeOrganizaciones] AS
SELECT A.idTipoOrganizacion,A.nombre,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoOrganizacion') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoOrganizacion] B
ON A.idTipoOrganizacion = B.idTipoOrganizacion
GO

CREATE VIEW [TiposDePagos] AS
SELECT A.idTipoPago,A.concepto,A.costo,A.idUsuarioCrea,A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoPago') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoPago] B
ON A.idTipoPago = B.idTipoPago
GO

CREATE VIEW [TiposDeSangre] AS
SELECT A.idTipoSangre, A.tipo, A.idUsuarioCrea, A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoSangre') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoSangre] B
ON A.idTipoSangre = B.idTipoSangre
GO

CREATE VIEW [TiposDeServicios] AS
SELECT A.idTipoServicio, A.nombre, A.idUsuarioCrea, A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoServicio') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoServicio] B
ON A.idTipoServicio = B.idTipoServicio
GO

CREATE VIEW [TiposDeUrgencia] AS
SELECT A.idTipoUrgencia, A.clasificacion,A.descripcion, A.idUsuarioCrea, A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoUrgencia') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoUrgencia] B
ON A.idTipoUrgencia = B.idTipoUrgencia
GO


CREATE VIEW [TiposDeUsuarios] AS
SELECT A.idTipoUsuario, A.tipo, A.idUsuarioCrea, A.fechaCrea
FROM Openquery (POSTGRES,'SELECT * FROM TecMVA.public.TipoUsuario') A RIGHT JOIN [DESKTOP-K3VUUJG\SQLEXPRESS].[TecMVA].[dbo].[TipoUsuario] B
ON A.idTipoUsuario = B.idTipoUsuario
GO

Select * From [EstadosCiviles]
Select * from [Generos]
Select * from [Horas]
Select * from [InstitucionesDeSalud]
Select * from [Paises]
Select * from [Periodos] --??????????????
Select * from [Puesto]
Select * from [TiposDeActividad]
Select * from [TiposCursosMaterias] --Mismo caso que Periodo
Select * from [TiposDeOrganizaciones]
Select * from [TiposDePagos]
Select * From [TiposDeSangre]
Select * from [TiposDeServicios]
Select * from [TiposDeUrgencia]
Select * from [TiposDeUsuarios]
GO

CREATE VIEW [Vista_Usuarios_SA] AS
SELECT idUsuario,
       apellidoMaterno,
	   apellidoPaterno,
	   nombreCompleto,
	   correo,
	   clave,
	   (
	   Select * from openquery(POSTGRES,'SELECT "tipo" FROM TecMVA.public.TipoUsuario WHERE "idTipoUsuario" = 1')
	   )
	   fechaCrea
FROM Usuario 
GO

SELECT * FROM [Vista_Usuarios_SA]
GO

--TRIGGER PARA ACTUALIZAR FECHAMODIFICA CUANDO SE ACTUALIZA UNA FILA
CREATE TRIGGER tr_Empleado
ON Empleado FOR UPDATE
AS
DECLARE @idTemp int
SELECT @idTemp = idEmpleado from inserted
UPDATE Empleado SET fechaModifica = GETDATE() WHERE idEmpleado = @idTemp
GO

--TRIGGER PARA VERIFICAR QUE SE INTRODUZCA UN USUARIOCREA CUANDO SE CREE UN USUARIO NUEVO
CREATE TRIGGER tr_UsuarioCreaVerificarUsuario
ON Usuario FOR INSERT
AS
DECLARE @CantidadDeUsuarios int
SELECT @CantidadDeUsuarios = COUNT(idUsuario) FROM Usuario
IF(@CantidadDeUsuarios > 1)
BEGIN
	DECLARE @TempUsuario int
	SELECT @TempUsuario = idUsuarioCrea from inserted
	IF(@TempUsuario IS NULL or @TempUsuario = '')
	BEGIN
	RAISERROR (N'Es necesario introducir el usuario que esta creando el nuevo usuario',10, 1);
	ROLLBACK TRANSACTIOn
	END
END
GO

--COMPROBAR QUE SOLO ESTE PRESENTE O EL ID DEL ALUMNO O EL ID DEL EMPLEADO
CREATE TRIGGER tr_ServicioEnfermeriaComprobacion_A
ON EnfermeriaServicio FOR INSERT
AS
DECLARE @idAlumnoTemp int
DECLARE @idEmpleadoTemp int


SELECT @idAlumnoTemp = idAlumno from inserted
SELECT @idEmpleadoTemp = idEmpleado from inserted


IF((@idAlumnoTemp IS NULL and @idEmpleadoTemp is NULL) OR (@idAlumnoTemp IS NOT NULL and @idEmpleadoTemp IS NOT NULL))
BEGIN
RAISERROR (N'El Servicio solo puede atender a un alumno o docente a la vez',10, 1);
	 ROLLBACK TRANSACTIOn
END
GO

--COMPROBAR QUE SE INTRODUZCA UN CORREO ELECTRONICO VALIDO
CREATE TRIGGER tr_UsuarioCorreo
ON Usuario FOR INSERT
AS
DECLARE @idUsuarioTemp int
DECLARE @correoTemp varchar(50)

SELECT @idUsuarioTemp = idUsuario from inserted
SELECT @correoTemp = correo from inserted

IF (
     CHARINDEX(' ',LTRIM(RTRIM(@correoTemp))) = 0 
AND  LEFT(LTRIM(@correoTemp),1) <> '@' 
AND  RIGHT(RTRIM(@correoTemp),1) <> '.' 
AND  CHARINDEX('.',@correoTemp ,CHARINDEX('@',@correoTemp)) - CHARINDEX('@',@correoTemp ) > 1 
AND  LEN(LTRIM(RTRIM(@correoTemp ))) - LEN(REPLACE(LTRIM(RTRIM(@correoTemp)),'@','')) = 1 
AND  CHARINDEX('.',REVERSE(LTRIM(RTRIM(@correoTemp)))) >= 3 
AND  (CHARINDEX('.@',@correoTemp ) = 0 AND CHARINDEX('..',@correoTemp ) = 0)
)
BEGIN
   print 'Correo valido'
END
ELSE
BEGIN
   print 'Correo invalido'
	RAISERROR (N'Direccion de correo invalido',10, 1);
	 ROLLBACK TRANSACTION
END
GO


--BORRAR CUALQUIER TIPO DE SANGRE QUE SE INTENTE INSERTAR
CREATE TRIGGER tr_TipoSangreInsertarDenegar
ON TipoSangre FOR INSERT
AS
DECLARE @idTipoSangretemp int
SELECT @idTipoSangretemp = idTipoSangre from inserted

DELETE FROM TipoSangre where idTipoSangre = @idTipoSangretemp
print 'No se pueden agregar mas tipos de sangre a la tabla "TipoSangre"'
GO

--VERIFICAR QUE EL NUMERO TELEFONICO DE UN EMPLEADO SEA VALIDO
CREATE TRIGGER tr_EmpleadoVerificarNumero
ON Empleado FOR INSERT
AS
DECLARE @idEmpleadoTemp int
DECLARE @numeroTemp char(10)

SELECT @idEmpleadoTemp = idEmpleado from inserted
SELECT @numeroTemp = telefono from inserted

if(@numeroTemp LIKE '866 %')
BEGIN
print 'Numero de telefono valido';
END
ELSE
BEGIN
	RAISERROR (N'Cantidad de comision no valida',10, 1);
	ROLLBACK TRANSACTION
END
GO