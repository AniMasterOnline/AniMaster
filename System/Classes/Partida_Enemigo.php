<?php
    require_once __DIR__."/../config.php";
    class Partida_Enemigo{
        /*Atributs*/
        public $id_enemigo;
        private $id_partida;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Partida_Enemigo(id_enemigo,id_partida) "
                    . "VALUES ('$this->id_enemigo', '$this->id_partida')");
            $db->close();
        }
        public function delete($enemigo){
            $db = new connexio();
            $sql = "delete from Partida_Enemigo where id_enemigo = '$enemigo'";
            $db->query($sql);
        }
        public function view_partida($partida){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Enemigo where id_partida = '$partida'";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Enemigo = new Partida_Enemigo($obj["id_enemigo"],$obj["id_partida"]);
                //var_dump($Usuari_Partida);
                array_push($rtn, $Partida_Enemigo);
            }
            $db->close();
            return $rtn;
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Enemigo;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Enemigo = new Partida_Enemigo($obj["id_enemigo"],$obj["id_partida"]);
                //var_dump($Partida_Enemigo);
                array_push($rtn, $Partida_Enemigo);
            }
            $db->close();
            return $rtn;
        }
        
        //CONSTRUCTORS
        function __construct(){
            $args = func_get_args();
            $num = func_num_args();
            $f='__construct'. $num;
            if (method_exists($this, $f)) {
                call_user_func_array(array($this, $f), $args);
            }
        }
        function __construct0(){
            $this->id_enemigo=0;
            $this->id_partida=0;
        }
        function __construct2($a1, $a2){
            $this->id_enemigo=$a1;
            $this->id_partida=$a2;
        }
           
        //METODES SET
        public function setId_Enemigo($id_enemigo) {
            $this->id_enemigo = $id_enemigo;
        }
        public function setId_Partida($id_partida) {
            $this->id_partida = $id_partida;
        }
        
        //METODES GET 
        public function getId_Enemigo(){
            return $this->id_Enemigo;
        }
        public function getId_Partida(){
            return $this->id_partida;
        }
    }
?>

