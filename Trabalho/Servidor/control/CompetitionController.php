<?php

include_once "model/request.php";
include_once "model/Competition.php";
include_once "database/DatabaseConnector.php";

class UserController
{

    public function register($request)
    {
        $params = $request->get_params();
        $user = new User($params["name"],
                $params["game"],
                $params["id"],
                $params["description"]);

        $db = new DatabaseConnector("localhost", "Aula", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user));
    }

    private function generateInsertQuery($user)
    {
        $query =  "INSERT INTO user (name, game, id, description) VALUES ('".$user->getName()."','".
            $user->getGame()."','".
            $user->getId()."','".
            $user->getDescrition()."','";

        return $query;
    }
}