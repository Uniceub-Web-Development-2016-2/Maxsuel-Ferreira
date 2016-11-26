<?php

class Competition{

    private $name;
    private $game;
    private $id ;
    private $description;

    public function construct($name, $game, $id, $description){
        $this->name  = $name;
        $this->game = $game;
        $this->ip = $id;
        $this->descripion = $description;

    }
    public function getName(){
        return $this->name;
    }
    public function getGame(){
        return $this->game;
    }
    public function getId(){
        return $this->id;
    }
    public function getDescripion(){
        return $this->descripion;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function setGame($game){
        $this->game = $game;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setDescription($description){
        $this->description = $description;
    }
}