<?php


class Photo extends Db_object
{
    protected static $db_table = "foto";
    protected static $db_table_fields = array('Bestandsnaam', 'Dier_ID');
    public $FotoID;
    public $Bestandsnaam;
    public $Dier_ID;
    public $upload_directory = 'img' . DS . 'uploads';

    public $tmp_path;

    public function set_file($file){
        if(empty($file) || !$file || !is_array($file)){
            $this->errors[] = "No file uploaded!";
            return false;
        }elseif($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        }else{
            // $this->FotoID = basename($file['FotoID']);
            $this->tmp_path = $file['tmp_name'];
        }
    }

    public function save(){
        if($this->Bestandsnaam){
            $this->update();
        }else{
            if(!empty($this->errors)){
                return false;
            }
            if(empty($this->Bestandsnaam) || empty($this->temp_path)){
                $this->errors[] = "File not available";
                return false;
            }
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->Bestandsnaam;

            if(file_exists($target_path)){
                $this->errors[] = "File {$this->Bestandsnaam} exists";
                return false;
            }
            if(move_uploaded_file($this->tmp_path, $target_path)){
                if($this->create()){
                    unset($this->tmp_path);
                    return true;
                }
            }else{
                $this->errors[] = "This folder has no write rights";
                return false;
            }
        }
    }

    public function picture_path(){
        return $this->upload_directory.DS.$this->Bestandsnaam;
    }

    public function delete_photo(){
        if($this->delete()){
            $target_path = SITE_ROOT.DS.'admin'.DS.$this->picture_path();
            return unlink($target_path) ? true : false;
        }else{
            return false;
        }
    }
}