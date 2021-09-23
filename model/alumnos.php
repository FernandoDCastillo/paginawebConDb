<?php
    include 'conectaDB.php';
class alumnos {
    public $id;
    public $alumno;
    public $nombre;
    public $sexo;
    
    public function __construct($id, $alumno, $nombre, $sexo) {  
        $this->id = $id;
        $this->alumno = $alumno;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }  

    public static function consultar() {
        $mysqli = conectadb::dbmysql();
        $consulta = "select * from alumnos";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaAlumnos = [];
        while ($alumno = mysqli_fetch_array($resultado)) {
            $listaAlumnos[] = new alumnos($alumno['id'], $alumno['alumno'],$alumno['nombre'], $alumno['sexo']);
        }
        $mysqli->close();
        return $listaAlumnos;
    }
    
}

?>