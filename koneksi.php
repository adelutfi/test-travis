<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id5881349_webpro"; //root
    private $password = "adelutfi2803"; //""
    private $db = "id5881349_adelutfinofitasariweb";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>