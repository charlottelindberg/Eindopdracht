<?php


class Dieren extends Db_object
{
    protected static $db_table = "dieren";
    protected static $db_table_fields = array('Naam', 'Leeftijd', 'Geslacht', 'Gesteriliseerd', 'Ras', 'Omschrijving', 'Asiel', 'Geadopteerd', 'Datum');
    public $DierenID;
    public $Naam;
    public $Leeftijd;
    public $Geslacht;
    public $Gesteriliseerd;
    public $Ras;
    public $Omschrijving;
    // public $Diersoort;
    public $Asiel;
    public $Geadopteerd;
    public $Datum;

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
            $this->tmp_path = $file['tmp_name'];
        }
    }

    // $sql .= " WHERE DierenID = " . $database->escape_string($DierenID); VERVANGE DOOR $sql .= " WHERE " . static::$db_table_field_id . " = " . $database->escape_string($this->$db_table_field_id);
    public static function find_the_animal($DierenID){
        global $database;
        $sql = "SELECT * FROM " . self::$db_table;
        $sql .= " WHERE DierenID = " . $database->escape_string($DierenID);
        $sql .= " ORDER BY DierenID ASC";
        // echo $sql;
        return self::find_this_query($sql);
    }

    public static function create_animal($Naam, $Leeftijd, $Geslacht, $Gesteriliseerd, $Ras, $Omschrijving, $Asiel, $Geadopteerd, $Datum){
        $dier = new Dieren();
        $dier->DierenID = "";
        $dier->Naam = $Naam;
        $dier->Leeftijd = $Leeftijd;
        $dier->Geslacht = $Geslacht;
        $dier->Gesteriliseerd = $Gesteriliseerd;
        $dier->Ras = $Ras;
        $dier->Omschrijving = $Omschrijving;
        // $dier->Diersoort = $Diersoort;
        $dier->Asiel = $Asiel;
        $dier->Geadopteerd = $Geadopteerd;
        $dier->Datum = $Datum;
        
        $dier->create(); 
    }

    public function save_the_animal(){
        if($this->Naam){
            $this->create(); 
        }else{
            if(!empty($this->errors)){
                return false;
            }   
        }
    }

}