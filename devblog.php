<html>
    <head>
        <title>Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <LINK REL=StyleSheet HREF="Public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/asideStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/contentStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/jquery-ui.min.js"></script>
        <script src="Public/jquery/panel.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php"; ?>
        <!-- Aside content box -->
        <div class="body-box">
            <!-- Aside content box -->
            <div class="aside-box-hidden">
                <div class="aside-title">
                    Settings
                </div>
                <div class="aside-1">
                    coses
                </div>
            </div>
            <!-- Body content box -->
            <div class="content-box-100">
                <div class="content-title">
                    DevBlog AniMaster Online
                </div>
                <div class="content-panel">
                    <div class="user-box">
                        <img  class="devblog-img" src="Public/img/code.jpg" />
                    </div>
                </div>
                <div id=panel-buttons" class="content-buttons">
                    <?php
                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                        require_once(__DIR__.'/System/Classes/Partida.php');
                        $Usuari_Partida = new Usuari_Partida();
                        $partida = $Usuari_Partida->view_user($value['id_usuari']);
                        $i = 1;
                        echo '<button onclick="mostrar(this);" value="0" id="partida0">Animaster</button>';
                    ?>
                </div>
                <div class="content-panel-zone">
                    <div id="partida-0" class="content-panel-partida">
                        <div id="accordion-devblog">
                            <h3>Animaster v1.0</h3>
                            <div>
                                <ul>
                                    <li>-Afegida la funcionalitat bàsica de la pàgina</li>
                                    <li>-Ara es poden crear i eliminar (Enemics, Npc's i Items)</li>
                                    <li>-Afegida una calculadora de tirades</li>
                                    <li>-Ara la calculadora es pot moure lliurement per la pantalla</li>
                                </ul>
                            </div>
                            <h3>AniMaster Alpha</h3>
                            <div>
                                <ul>
                                    <li>-Sistema de Registre i Login creat</li>
                                    <li>-Slider bàsic afegit al Índex</li>
                                    <li>-Creada la pàgina del Panell</li>
                                    <li>-Creada la pàgina de Taulell</li>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>

