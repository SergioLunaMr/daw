<?php
namespace App\Model;

class Aulas extends DBAbstractModel
{
    private $id;
    private $codigo;
    private $numero_mesas;
    private $t_agrupamiento_grupos_id;
    private static $instancia;
    private $incidencias = array();

    public static function getInstancia()
    {
        if (!self::$instancia instanceof self) {
            self::$instancia = new self;
        }
        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error("La clonación de este objeto no está permitido");
    }

    //getByID
    public function get($id = "")
    {
        $this->query = "SELECT aulas WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->getResultsFromQuery();
        $this->mensaje = "Aula listada";
        return $this->rows;
    }

    public function getAll()
    {
        $this->query = "SELECT * FROM aulas";
        $this->getResultsFromQuery();
        $this->mensaje = "Aulas mostradas.";
        return $this->rows;
    }

    public function getWithGroup(){
        $this->query = "SELECT
        a.id id, 
        a.codigo codigo, 
        a.numero_mesas numero_mesas,
        g.descripcion descripcion_grupo
        from 
        aulas a
        inner join t_agrupamiento_grupos g using (id)";
        $this->getResultsFromQuery();
        $this->mensaje = "Aulas mostradas.";
        return $this->rows;
    }

    public function set()
    {
        $this->query = "INSERT INTO aulas (codigo, numero_mesas, t_agrupamiento_grupos_id) VALUES (:codigo, :numero_mesas, :t_agrupamiento_grupos_id)";
        $this->parametros["codigo"] = $this->codigo;
        $this->parametros["numero_mesas"] = $this->numero_mesas;
        $this->parametros["t_agrupamiento_grupos_id"] = $this->t_agrupamiento_grupos_id;
        $this->getResultsFromQuery();
        $this->mensaje = "Aula añadida.";
        return $this;
    }

    public function edit()
    {
        $this->query = "UPDATE aulas SET codigo=:codigo, numero_mesas=:numero_mesas, t_agrupamiento_grupos_id=:t_agrupamiento_grupos_id WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->parametros["codigo"] = $this->codigo;
        $this->parametros["numero_mesas"] = $this->numero_mesas;
        $this->parametros["t_agrupamiento_grupos_id"] = $this->t_agrupamiento_grupos_id;
        $this->getResultsFromQuery();
        $this->mensaje = "Aula actualizada.";
        return $this;
    }

    public function delete($id = "")
    {
        $id == "" ? $id = $this->id : "";
        $this->query = "DELETE FROM aulas WHERE id=:id";
        $this->parametros["id"] = $id;
        $this->getResultsFromQuery();
        $this->mensaje = "Aula eliminada.";
        return $this;
    }

    public function getEstadosnumero_mesas()
    {
        $this->query = "SELECT * FROM t_numero_mesas_aulas";
        $this->getResultsFromQuery();
        $this->mensaje = "numero_mesases mostradas.";
        return $this->rows;
    }

    public function getEquiposbyAula($id)
    {
        $data=[];
        $this->query = "SELECT 
        e.codigo codigo, 
        e.descripcion descripcion,
        e.t_estados_id t_estados_id,
        e.referencia_JA referencia_JA,
        e.imagen imagen,
        s.estado estado,
        u.puesto puesto
        from 
        equipos e
        inner join ubicacion r using (id)
        inner join aulas t using (id)
        inner join t_estados s using (id)
        inner join ubicacion u using (id)
        WHERE e.id=:id";
        $this->parametros["id"]=$id;
        $this->getResultsFromQuery();
        array_push($data, $this->rows);
        $this->query="SELECT codigo FROM aulas WHERE id=:id";
        $this->parametros["id"]=$id;
        $this->getResultsFromQuery();
        array_push($data, $this->rows);
        $this->mensaje = "Equipos por aulas mostrados.";
        
        return $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumAula()
    {
        return $this->codigo;
    }

    public function setNumAula($codigo)
    {
        $this->codigo = $codigo;
    }


    public function getnumero_mesas()
    {
        return $this->numero_mesas;
    }

    public function setnumero_mesas($numero_mesas)
    {
        $this->numero_mesas = $numero_mesas;
    }


    public function getNumMesas()
    {
        return $this->t_agrupamiento_grupos_id;
    }

    public function setNumMesas($t_agrupamiento_grupos_id)
    {
        $this->t_agrupamiento_grupos_id = $t_agrupamiento_grupos_id;
    }

    public function getIncidenciasAula()
    {
        //METER DENTRO DE GET AULAS
    }

}