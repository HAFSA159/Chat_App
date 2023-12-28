<?php

    class Message{

        // public $id;
        // public $content;
        // public $sender_id;
        // public $reciever_id;

      
        static public function NewMessage(){
            echo "12";
            
        }

        // static public function NewMessage($content, $sender_id, $reciever_id){
        //     global $db;
        //     $query = ("INSERT INTO messages (content, sender_id, reciever_id) VALUES ('$content','$sender_id','$reciever_id')");
        //     return $db->query($query);
        // }
        //     static public function GetAllRooms($id) {
        //         global $db;
        //         $id =   $query = "SELECT * from rooms WHERE create_id = '$id' ";
        //         $rus=$db->query($query);
        //         return $rus->fetch_all(MYSQLI_ASSOC);

        //     }
        //         static public function GetAllUsers() {
        //             global $db;
        //             $id =   $query = "SELECT * from users ";
        //             $rus=$db->query($query);
        //             return $rus->fetch_all(MYSQLI_ASSOC);

        //         }

    }
