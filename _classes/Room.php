<?php

    class Room{

        public $id;
        public $name;
        public $creat_id;

        static public function NewRoom($roomName, $user){
            global $db;
            $query = ("INSERT INTO rooms (roomName,create_id) VALUES ('$roomName', '$user')");
            return $db->query($query);
        }
    }
