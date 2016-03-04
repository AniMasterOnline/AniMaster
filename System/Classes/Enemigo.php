<?php
    require_once __DIR__."/../config.php";
    class Enemigo{
        /*Atributs*/
        private $id_enemigo;
        private $id_equipo;
        public $vida;
        public $ataque;
        public $defensa;
        public $turno;
        public $poderes;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Enemigo(id_enemigo,id_equipo,vida,ataque,defensa,turno,poderes) "
                    ."VALUES ('$this->id_enemigo', '$this->id_equipo', '$this->vida', '$this->ataque', '$this->defensa', '$this->turno', '$this->poderes')");
            $db->close();
        }
        public function mod(){
            $db = new connexio();
            $db->query("UPDATE Enemigo SET id_equipo='$this->id_equipo',vida='$this->vida',ataque='$this->ataque',defensa='$this->defensa',turno='$this->turno',poderes='$this->poderes' WHERE id_enemigo= '$this->id_enemigo'");
            $db->close();
        }
        public function delete($var){
            $db = new connexio();
            $sql = "delete from Enemigo where id_enemigo = $var";
            $db->query($sql);
        }
        public function view_all(){
            $db = new connexio();
            $sql = "SELECT * FROM Enemigo;";
            $query = $db->query($sql);
            $rtn = array();
            while($obj = $query->fetch_assoc()){
                $Enemigo = new Enemigo($obj["id_enemigo"],$obj["id_equipo"],$obj["vida"],$obj["ataque"],$obj["defensa"], $obj["turno"], $obj["poderes"]);
                //var_dump($Usuari);
                array_push($rtn, $Enemigo);
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
            $this->id_equipo="";
            $this->vida="";
            $this->ataque="";
            $this->defensa="";
            $this->turno="";
            $this->poderes="";
        }
        function __construct1($a1){
            $this->id_enemigo=$a1;
            $this->id_equipo="";
            $this->vida="";
            $this->ataque="";
            $this->defensa="";
            $this->turno="";
            $this->poderes="";
        }
        function __construct6($a2, $a3, $a4, $a5, $a6, $a7){
            $this->id_enemigo=0;
            $this->id_equipo=$a2;
            $this->vida=$a3;
            $this->ataque=$a4;
            $this->defensa=$a5;
            $this->turno=$a6;
            $this->poderes=$a7;
        }
        function __construct7($a1, $a2, $a3, $a4, $a5, $a6, $a7){
            $this->id_enemigo=$a1;
            $this->id_equipo=$a2;
            $this->vida=$a3;
            $this->ataque=$a4;
            $this->defensa=$a5;
            $this->turno=$a6;
            $this->poderes=$a7;
        }
           
        //METODES SET
        public function setId_Enemigo($var) {
            $this->id_enemigo = $var;
        }
        public function setId_Equipo($var) {
            $this->id_equipo = $var;
        }
        public function setVida($var) {
            $this->vida = $var;
        }
        public function setAtaque($var) {
            $this->ataque = $var;
        }
        public function setDefensa($var) {
            $this->defensa = $var;
        }
        public function setTurno($var) {
            $this->turno = $var;
        }
        public function setPoderes($var) {
            $this->poderes = $var;
        }
        
        //METODES GET 
        public function getId_Enemigo(){
            return $this->id_enemigo;
        }
        public function getId_Equipo(){
            return $this->id_equipo;
        }
        public function getVida(){
            return $this->vida;
        }
        public function getAtaque(){
            return $this->ataque;
        }
        public function getDefensa(){
            return $this->defensa;
        }
        public function getTurno(){
            return $this->turno;
        }
        public function getPoderes(){
            return $this->poderes;
        }
    }
?>