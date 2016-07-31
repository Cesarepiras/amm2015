<?php

/**
 * Model class
 *
 * @author Cesare Piras
 */
class Model {

    private $data;
    private $nome;
    private $id;
    private $descrizione;
    private $immagine;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $intVal = filter_var($id, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (!isset($intVal)) {
            return false;
        }
        $this->id = $intVal;
        return true;
    }

    public function getData() {
        return $this->data;
    }

    public function setData(DateTime $data) {
        $this->data = $data;
        return true;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return true;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }

    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
        return true;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function setImmagine($immagine) {
        $this->immagine = $immagine;
        return true;
    }

}

?>
