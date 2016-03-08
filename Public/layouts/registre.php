<form id="registre" method="post" action="System/Protocols/registrarUsuari.php"> 
    <table align="center" BORDER=0>
        <TR>
            <TD>
            <input class="input" id="user" placeholder="Usuari *" value="" type="text" name="TempUser" maxlength="25" required autofocus>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="pass" placeholder="Contrasenya *" value="" type="password" name="TempPassword" maxlength="16" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="pass2" placeholder="Repeteix Contrasenya *" value="" type="password" name="TempRepeatPassword" maxlength="16" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="email" placeholder="Correu Electrònic *" value="" type="text" name="TempEmail" maxlength="30" required>
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="phone" placeholder="Telèfon" value="" type="number" name="TempTelefon" maxlength="9">
            </TD>
        </TR>
        <TR>
            <TD>
            <input class="input" id="logbutton" type="submit" value="Registra't">
            </TD>
        </TR>
        <TR>
            <TD>
            <p>Al registrar-te, acceptes les <a class="link" href="#">Condicions del Servei</a> i la <a class="link" href="#">Política de Privacitat</a>, 
            incluïnt el <a class="link" href="#">Ús de Cookies</a>.<!-- Altres podran trobar-te per correu electònic 
            o per número de telèfon quan sigui proporcionat.--></p>
            </TD>
        </TR>
    </table>
</form>
<LINK REL=StyleSheet HREF="Public/css/loginStyle.css" TYPE="text/css" MEDIA=screen>

