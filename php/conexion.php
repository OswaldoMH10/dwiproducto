<?php
class Mysql{

    private $connection;
    public $result;
    
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdphotomagno";
        // Create connection
        $this->connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->connection->connect_error) {
          die("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    function getFotos()  {
        $sql = 'SELECT idimagenes, nombre, descripcion, archivo FROM imagenes';
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showFoto( $row["idimagenes"], $row["nombre"], $row["descripcion"], $row["archivo"]  );
            }
        }
    }
    
    function showFoto($id, $nombre, $descripcion, $foto){
        echo '<tr>';
        echo '<td>'. $id .'</td>';
        echo '<td><img src="img/'.$foto.'" width="120px"/></td>';
        echo '<td>'. $nombre .'</td>';
        echo '<td>'. $descripcion .'</td>';
        echo '<td><A href="editarimagen.php?id='.$id.'"><button type="button" class="btn btn-warning">EDITAR</button></A></td>';
        echo '</tr>';
    }

    function updateFoto($id, $nombre, $descripcion, $imagen){
        $sql = "UPDATE
                `imagenes`
            SET
                idimagenes = '$id',
                nombre = '$nombre',
                descripcion = '$descripcion',
                archivo = '$imagen'
            WHERE
                imagenes.idimagenes = '$id'";
        $this->connection->query($sql);
    }

    function showLineaUno($nombre, $descripcion, $foto){
        echo
            '<div class="w3-third w3-container w3-margin-bottom">
                <img src="img/'. $foto .'" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>'. $nombre .'</b></p>
                    <p>'. $descripcion .'</p>
                </div>
            </div>';
    }

    function primerLinea(){
        $sql = "SELECT
                idimagenes, nombre, descripcion, archivo
            FROM
                imagenes
            WHERE idimagenes BETWEEN 1 and 3";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showLineaUno( $row["nombre"], $row["descripcion"], $row["archivo"]  );
            }
        }
        $this->connection->query($sql);
    }

    function showLineaDos($nombre, $descripcion, $foto){
        echo
            '<div class="w3-third w3-container w3-margin-bottom">
                <img src="img/'. $foto .'" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>'. $nombre .'</b></p>
                    <p>'. $descripcion .'</p>
                </div>
            </div>';
    }

    function segundaLinea(){
        $sql = "SELECT
                idimagenes, nombre, descripcion, archivo
            FROM
                imagenes
            WHERE idimagenes BETWEEN 4 and 6";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showLineaUno( $row["nombre"], $row["descripcion"], $row["archivo"]  );
            }
        }
        $this->connection->query($sql);
    }

    function showLineaTres($nombre, $descripcion, $foto){
        echo
            '<div class="w3-third w3-container w3-margin-bottom">
                <img src="img/'. $foto .'" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>'. $nombre .'</b></p>
                    <p>'. $descripcion .'</p>
                </div>
            </div>';
    }

    function tercerLinea(){
        $sql = "SELECT
                idimagenes, nombre, descripcion, archivo
            FROM
                imagenes
            WHERE idimagenes BETWEEN 7 and 9";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showLineaUno( $row["nombre"], $row["descripcion"], $row["archivo"]  );
            }
        }
        $this->connection->query($sql);
    }

    function getPaquetes()  {
        $sql = 'SELECT idpaquete, nombre, precio, descripcion FROM paquete';
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showPaquete( $row["idpaquete"], $row["nombre"], $row["precio"], $row["descripcion"] );
            }
        }
    }
    
    function showPaquete($id, $nombre, $precio, $descripcion){
        echo '<tr>';
        echo '<td>'. $id .'</td>';
        echo '<td>'. $nombre .'</td>';
        echo '<td>';
        echo     '<ul><li>'. $descripcion .'</li></ul>';
        echo '</td>';
        echo '<td>$'. $precio .'</td>';
        echo '<td><a href="editarpaquetes.php?id='. $id .'"><button type="button" class="btn btn-warning">Editar</button></a></td>';
        echo '<tr>';

    }    

    function updatePaquete($id, $nombre, $descripcion, $precio){
        $sql = "UPDATE
                paquete
            SET
                idpaquete = '$id',
                nombre = '$nombre',
                descripcion = '$descripcion',
                precio = '$precio'
            WHERE
                paquete . idpaquete = '$id'";
        $this->connection->query($sql);
    }
    
    function getPaquetesIndex1()  {
        $sql = "SELECT 
                idpaquete, nombre, precio, descripcion 
            FROM 
                paquete
            WHERE 
                paquete.idpaquete = '1'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showPaquete1( $row["idpaquete"], $row["nombre"], $row["precio"], $row["descripcion"] );
            }
        }
        $this->connection->query($sql);
    }

    function getPaquetesIndex2()  {
        $sql = "SELECT 
                idpaquete, nombre, precio, descripcion 
                FROM 
                paquete
            WHERE 
                paquete.idpaquete = '2'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showPaquete2( $row["idpaquete"], $row["nombre"], $row["precio"], $row["descripcion"] );
            }
        }
        $this->connection->query($sql);
    }

    function getPaquetesIndex3()  {
        $sql = "SELECT 
                idpaquete, nombre, precio, descripcion 
                FROM 
                paquete
            WHERE 
                paquete.idpaquete = '3'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->showPaquete3( $row["idpaquete"], $row["nombre"], $row["precio"], $row["descripcion"] );
            }
        }
        $this->connection->query($sql);
    }

    function showPaquete1($id, $nombre, $precio, $descripcion){
        echo '<div class="w3-third w3-margin-bottom">';
        echo '<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">';
        echo   '<li class="w3-black w3-xlarge w3-padding-32">'. $nombre .'</li>';
        echo   '<li class="w3-padding-16">'. $descripcion .'</li>';
        echo   '<li class="w3-padding-16">';
        echo     '<h2>$'. $precio .'</h2>';
        echo   '</li>';
        echo '</ul>';
        echo '</div>';
    }

    function showPaquete2($id, $nombre, $precio, $descripcion){
        echo '<div class="w3-third w3-margin-bottom">';
        echo '<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">';
        echo   '<li class="w3-black w3-xlarge w3-padding-32">'. $nombre .'</li>';
        echo   '<li class="w3-padding-16">'. $descripcion .'</li>';
        echo   '<li class="w3-padding-16">';
        echo     '<h2>$'. $precio .'</h2>';
        echo   '</li>';
        echo '</ul>';
        echo '</div>';
    }

    function showPaquete3($id, $nombre, $precio, $descripcion){
        echo '<div class="w3-third">';
        echo '<ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">';
        echo   '<li class="w3-black w3-xlarge w3-padding-32">'. $nombre .'</li>';
        echo   '<li class="w3-padding-16">'. $descripcion .'</li>';
        echo   '<li class="w3-padding-16">';
        echo     '<h2>$'. $precio .'</h2>';
        echo   '</li>';
        echo '</ul>';
        echo '</div>';
    }
}
?>