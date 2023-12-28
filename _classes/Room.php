<?php

    class Room{

        public $id;
        public $name;
        public $creat_id;

        static public function NewRoom($roomName,$file,$user){
            global $db;
            $query = ("INSERT INTO rooms (roomName,file,create_id) VALUES ('$roomName','$file','$user')");
            return $db->query($query);
        }
            static public function GetAllRooms($id) {
                global $db;
                $id =   $query = "SELECT * from rooms WHERE create_id = '$id' ";
                $rus=$db->query($query);
                return $rus->fetch_all(MYSQLI_ASSOC);

            }
                static public function GetAllUsers() {
                    global $db;
                    $id =   $query = "SELECT * from users ";
                    $rus=$db->query($query);
                    return $rus->fetch_all(MYSQLI_ASSOC);

                }

    }
