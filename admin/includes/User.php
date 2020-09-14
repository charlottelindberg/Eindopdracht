<?php


class User extends Db_object
{
    protected static $db_table = "gebruikers";
    protected static $db_table_fields = array('Username', 'Password', 'Naam', 'Adres', 'Status', 'GebruikerFoto');
    public $GebruikerID;
    public $Username;
    public $Password;
    public $Naam;
    public $Adres;
    public $GebruikerFoto;
    public $upload_directory = 'img' . DS . 'users';

    

    public $tmp_path;



    public $image_placeholder = 'http://place-hold.it/400x400&text=image';

    public static function verify_user($user, $pass){
        global $database;
        $Username = $database->escape_string($user);
        $Password = $database->escape_string($pass);

        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "Username = '{$Username}' ";
        $sql .= "AND Password = '{$Password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public function image_path_and_placeholder(){
        return empty($this->GebruikerFoto) ? $this->image_placeholder : $this->upload_directory.DS.$this->GebruikerFoto;
    }

    public function set_file($file){
        if(empty($file) || !$file || !is_array($file)){
            $this->errors[] = "No file uploaded!";
            return false;
        }elseif($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        }else{
            $this->GebruikerFoto = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];
        }
    }

    public function save_user_and_image(){
        $target_path = SITE_ROOT . DS . "admin" . DS . $this->upload_directory . DS . $this->GebruikerFoto;

            if(!empty($this->errors)){
                return false;
            }
            if(empty($this->GebruikerFoto) || empty($this->tmp_path)){
                $this->errors[] = "File not available";
                return false;
            }

            if(file_exists($target_path)){
                $this->errors[] = "File {$this->GebruikerFoto} exists";
                return false;
            }
            if(move_uploaded_file($this->tmp_path, $target_path)){
                echo 'test';
                if($this->create()){
                    unset($this->tmp_path);
                    return true;

                }
            }else{
                echo 'test';
                $this->errors[] = "This folder has no write rights";
                return false;
            }

    }


}

?>