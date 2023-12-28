<?php

    class Room{

        public $id;
        public $name;
        public $creat_id;

        static public function NewRoom($roomName,$user){
            global $db;
            $query = ("INSERT INTO rooms (roomName, create_id) VALUES ('$roomName', '$user')");
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
//            static function GetAllUsers(){
//                global $db;
//                $sql = "SELECT * FROM users";
//                $stmt = $db->prepare($sql);
//
//                $stmt->execute();
//
//                $result = $stmt->get_result();
//
//                $userData = $result->fetch_all(MYSQLI_ASSOC);
//
//                $stmt->close();
//                return $userData;
//            }
    }
