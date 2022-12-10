
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
	CONSTRAINT PKAlumno PRIMARY KEY(idAlumno)
)


--ALumnoCursoMateria
create table AlumnoCursoMateria
(
idAlumnoCursoMateria int not null,
idAlumno int not null,
idCurso int not null,
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
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
	CONSTRAINT PKFicha PRIMARY KEY(idFicha)
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
idUsuarioModifica int not null,
fechaModifica datetime not null
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
idUsuarioModifica int not null,
fechaModifica datetime not null
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
--TipoPreparatoria
CREATE TABLE TipoPreparatoria(
	idTipoPreparatoria int IDENTITY (1,1),
	nombre varchar (50) not null,
	estatus bit default 1 not null,
	idUsuarioCrea int not null,
	fechaCrea datetime not null default CURRENT_TIMESTAMP,
	idUsuarioModifica int not null,
	fechaModifica datetime not null
	CONSTRAINT PKTipoPreparatoria PRIMARY KEY(idTipoPreparatoria)
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
idUsuarioModifica int not null,
fechaModifica datetime not null
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
	idUsuarioModifica int not null,
	fechaModifica datetime not null
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
CREATE INDEX IX_Consumibles on Contrato(idContrato)
CREATE INDEX IX_CursoExtraordinario on CursoExtraordinario(idCursoExtraordinario) 
CREATE INDEX IX_Departamento on Departamento(idDepartamento) 
CREATE INDEX IX_Documento on Documento(idDocumento) 
CREATE INDEX IX_Edificio on Edificio(idEdificio) 
CREATE INDEX IX_EnfermeriaServicio on EnfermeriaServicio(idEnfermeriaServicio) 
CREATE INDEX IX_Empleado on Empleado(idEmpleado) 
CREATE INDEX IX_Estado on Estado(idEstado) 
CREATE INDEX IX_Ficha on Ficha(idFicha) 
CREATE INDEX IX_Justificante on Justificante(idJustificante) 
CREATE INDEX IX_Organizacion on Organizacion(idOrganizacion) 
CREATE INDEX IX_Preparatoria on Preparatoria(idPreparatoria) 
CREATE INDEX IX_PrestamoPrefectura on PrestamoPrefectura(idPrestamoPrefectura) 
CREATE INDEX IX_Residencia on Residencia(idResidencia) 
CREATE INDEX IX_Servicio on Servicio(idServicio) 
CREATE INDEX IX_ServicioSocial on ServicioSocial(idServicioSocial) 
CREATE INDEX IX_Software on Software(idSoftware) 
CREATE INDEX IX_SoftwareEquipo on Software(idSoftware) 
CREATE INDEX IX_SolicitudLaboratorio on SolicitudLaboratorio(idSolicitudLaboratorio) 
CREATE INDEX IX_SolicitudSoftware on SolicitudSoftware(idSolicitudSoftware)
CREATE INDEX IX_SolicitudConsumible on SolicitudConsumible(idSolicitudConsumible)
CREATE INDEX IX_SolicitudHerramienta on SolicitudHerramienta(idSolicitudHerramienta)
CREATE INDEX IX_TipoActivoFijo on TipoActivoFijo(idTipoActivoFijo) 
CREATE INDEX IX_TipoAsentamiento on TipoAsentamiento(idTipoAsentamiento) 
CREATE INDEX IX_TipoPreparatoria on TipoPreparatoria(idTipoPreparatoria) 
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

ALTER TABLE Actividad
ADD CONSTRAINT FKActividadUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Actividad
ADD CONSTRAINT FKActividadUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

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
ADD CONSTRAINT FKEnfermeriaServicioUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE EnfermeriaServicio
ADD CONSTRAINT FKEnfermeriaServicioUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)


ALTER TABLE Empleado
ADD CONSTRAINT FKEmpleadoAsentamiento FOREIGN KEY (idAsentamiento)
REFERENCES Asentamiento(idAsentamiento)

--ALTER TABLE Empleado
--ADD CONSTRAINT FKEmpleadoIdPuesto FOREIGN KEY (idPuesto)
--REFERENCES Puesto(idPuesto)

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
ADD CONSTRAINT FKOrganizacionUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Organizacion
ADD CONSTRAINT FKOrganizacionUsuarioModifica FOREIGN KEY (idUsuarioModifica)
REFERENCES Usuario(idUsuario)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoAlumno FOREIGN KEY (idAlumno)
REFERENCES Alumno(idAlumno)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE Pago
ADD CONSTRAINT FKPagoUsuarioModifica FOREIGN KEY (idUsuarioModifica)
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


ALTER TABLE TipoPreparatoria
ADD CONSTRAINT FKTipoPreparatoriaUsuarioCrea FOREIGN KEY (idUsuarioCrea)
REFERENCES Usuario(idUsuario)

ALTER TABLE TipoPreparatoria
ADD CONSTRAINT FKTipoPreparatoriaUsuarioModifica FOREIGN KEY (idUsuarioModifica)
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

