<?php
namespace App\Model;

class Usuarios extends DBAbstractModel {
    private $tipoUsuario;
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $activo;
    private static $instancia;

    public static function getInstancia() {
        if(!self::$instancia instanceof self) {
            self::$instancia = new self;
        }
        return self::$instancia;
    }

    public function __clone() {
        trigger_error("La clonación de este objeto no está permitido");
    }

    //getByID
    //getprofesores
    public function get($id = ""){
        $this->query = "SELECT profesores WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->getResultsFromQuery();
        $this->mensaje = "Profesor listado";
        return $this->rows;
    }

    public function getAlumnos($id = ""){
        $this->query = "SELECT alumnos WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->getResultsFromQuery();
        $this->mensaje = "Alumno listado";
        return $this->rows;
    }


    public function getAll() {
        $users=[];
        $this->query = "SELECT * FROM profesores";
        $this->getResultsFromQuery();
        $this->mensaje = "Profesores listados.";
        $users[]=$this->rows;
        $this->query = "SELECT * FORM alumnos";
        $this->getResultsFromQuery();
        $this->mensaje = "Alumnos listados.";
        $users[]=$this->rows;
        return $users;
    }

    public function getAllAlumnos() {
        $users=[];
        $this->query = "SELECT * FROM alumnos";
        $this->getResultsFromQuery();
        $this->mensaje = "Alumnos listados.";
        return $this->rows;
    }

    //setProfesores
    public function set(){
        $this->query = "INSERT INTO profesores (id, nombre, email, password) VALUES (:id, :nombre, :email, :password)";
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["email"] = $this->email;
        $this->parametros["password"] = $this->password;
        $this->getResultsFromQuery();
        $this->mensaje="Profesor añadido.";
        return $this;
    }

    public function setAlumno(){
        $this->query = "INSERT INTO alumnos (id, nombre, email, password, activo) VALUES (:id, :nombre, :email, :password, :activo)";
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["email"] = $this->email;
        $this->parametros["password"] = $this->password;
        $this->parametros["activo"]= $this->activo;
        $this->getResultsFromQuery();
        $this->mensaje="Alumno añadido.";
        return $this;
    }

    //editProfesores
    public function edit(){
        $this->query = "UPDATE profesores SET nombre=:nombre, email=:email, password=:password WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["email"] = $this->email;
        $this->parametros["password"] = $this->password;
        $this->getResultsFromQuery();
        $this->mensaje="Profesor actualizado.";
        return $this;
    }

    public function editAlumno(){
        $this->query = "UPDATE alumnos SET nombre=:nombre, email=:email, password=:password, activo=:activo WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["email"] = $this->email;
        $this->parametros["password"] = $this->password;
        $this->parametros["activo"]= $this->activo;
        $this->getResultsFromQuery();
        $this->mensaje="Alumno actualizado.";
        return $this;
    }

    //deleteprofesor
    public function delete($id=""){
        $id=="" ? $id=$this->id : "";
        $this->query = "DELETE FROM profesores WHERE id=:id";
        $this->parametros["id"] = $id;
        $this->getResultsFromQuery();
        $this->mensaje="Profesor eliminado.";
        return $this;
    }

    public function deleteAlumno($id=""){
        $id=="" ? $id=$this->id : "";
        $this->query = "DELETE FROM alumnos WHERE id=:id";
        $this->parametros["id"] = $id;
        $this->getResultsFromQuery();
        $this->mensaje="Alumno eliminado.";
        return $this;
    }

    public function login($usuario, $password) {
        $this->query = "SELECT * FROM profesores WHERE nombre=:nombre AND password=:password";
        $this->parametros["nombre"]=$usuario;
        $this->parametros["password"]=$password;
        $this->getResultsFromQuery();
        if(!$this->rows){
            $this->query = "SELECT * FROM alumnos WHERE nombre=:nombre AND password=:password";
            $this->parametros["nombre"]=$usuario;
            $this->parametros["password"]=$password;
            $this->getResultsFromQuery();
        }
        $this->mensaje="Información de usuario obtenida.";
        return $this->rows;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }


    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo=$activo;
    }

}