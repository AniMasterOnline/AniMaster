<?php
    require_once __DIR__."/../config.php";
    class Partida_Player{
        /*Atributs*/
        public $id_player;
        private $id_partida;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Partida_Player(id_player,id_partida) "
                    . "VALUES ('$this->id_player', '$this->id_partida')");
            $db->close();
        }
        public function delete($partida, $player){
            $db = new connexio();
            $sql = "delete from Partida_Player where id_player = '$player' and id_partida = '$partida'";
            $db->query($sql);
        }
        public function view_partida($partida){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Player where id_partida = '$partida'";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Player = new Partida_Player($obj["id_player"],$obj["id_partida"]);
                //var_dump($Usuari_Partida);
                array_push($rtn, $Partida_Player);
            }
            $db->close();
            return $rtn;
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Partida_Player;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Partida_Player = new Partida_Player($obj["id_player"],$obj["id_partida"]);
                //var_dump($Usuari_Partida);
                array_push($rtn, $Partida_Player);
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
            $this->id_player=0;
            $this->id_partida=0;
        }
        function __construct2($a1, $a2){
            $this->id_player=$a1;
            $this->id_partida=$a2;
        }
           
        //METODES SET
        public function setId_Enemigo($id_player) {
            $this->id_player = $id_player;
        }
        public function setId_Partida($id_partida) {
            $this->id_partida = $id_partida;
        }
        
        //METODES GET 
        public function getId_Player(){
            return $this->id_Player;
        }
        public function getId_Partida(){
            return $this->id_partida;
        }
    }
?>

