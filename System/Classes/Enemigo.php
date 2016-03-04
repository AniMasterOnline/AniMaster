<?php
    require_once __DIR__."/../config.php";
    class Enemigo{
        /*Atributs*/
        private $id_enemigo;
        public $nom;
        public $vida;
        public $ataque;
        public $arma;
        public $defensa;
        public $armadura;
        public $turno;
        public $poderes;
        
        //METODES
        public function add(){
            $db = new connexio();
            $db->query("INSERT INTO Enemigo(id_enemigo,id_equipo,vida,ataque,defensa,turno,poderes) "
                    ."VALUES ('$this->id_enemigo', '$this->nom','$this->vida', '$this->ataque', '$this->arma','$this->defensa', '$this->armadura','$this->turno', '$this->poderes')");
            $db->close();
        }
        public function mod(){
            $db = new connexio();
            $db->query("UPDATE Enemigo SET nom='$this->nom'vida='$this->vida',ataque='$this->ataque',arma='$this->arma',defensa='$this->defensa',armadura='$this->armadura',turno='$this->turno',poderes='$this->poderes' WHERE id_enemigo= '$this->id_enemigo'");
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
                $Enemigo = new Enemigo($obj["id_enemigo"],$obj["nom"],$obj["vida"],$obj["ataque"],$obj["arma"],$obj["defensa"],$obj["armadura"], $obj["turno"], $obj["poderes"]);
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
            $this->nom="";
            $this->vida="";
            $this->ataque="";
            $this->arma="";
            $this->defensa="";
            $this->armadura="";
            $this->turno="";
            $this->poderes="";
        }
        function __construct1($a1){
            $this->id_enemigo=$a1;
            $this->nom="";
            $this->vida="";
            $this->ataque="";
            $this->arma="";
            $this->defensa="";
            $this->armadura="";;
            $this->turno="";
            $this->poderes="";
        }
        function __construct8($a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9){
            $this->id_enemigo=0;
            $this->nom=$a2;
            $this->vida=$a3;
            $this->ataque=$a4;
            $this->arma=$a5;
            $this->defensa=$a6;
            $this->armadura=$a7;
            $this->turno=$a8;
            $this->poderes=$a9;
        }
        function __construct9($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9){
            $this->id_enemigo=$a1;
            $this->nom=$a2;
            $this->vida=$a3;
            $this->ataque=$a4;
            $this->arma=$a5;
            $this->defensa=$a6;
            $this->armadura=$a7;
            $this->turno=$a8;
            $this->poderes=$a9;
        }
           
        //METODES SET
        public function setId_Enemigo($var) {
            $this->id_enemigo = $var;
        }
        public function setNom($var) {
            $this->nom = $var;
        }
        public function setVida($var) {
            $this->vida = $var;
        }
        public function setAtaque($var) {
            $this->ataque = $var;
        }
        public function setArma($var) {
            $this->arma = $var;
        }
        public function setDefensa($var) {
            $this->defensa = $var;
        }
        public function setArmadura($var) {
            $this->armadura = $var;
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
        public function getNom(){
            return $this->nom;
        }
        public function getVida(){
            return $this->vida;
        }
        public function getAtaque(){
            return $this->ataque;
        }
        public function getArma(){
            return $this->arma;
        }
        public function getDefensa(){
            return $this->defensa;
        }
        public function getArmadura(){
            return $this->armadura;
        }
        public function getTurno(){
            return $this->turno;
        }
        public function getPoderes(){
            return $this->poderes;
        }
    }
?>