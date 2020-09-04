<?php


class Comment extends Db_object
{
    protected static $db_table = "comments";
    protected static $db_table_fields = array('CommentID', 'FotoID', 'Gebruiker', 'Bericht');
    public $CommentID;
    public $FotoID;
    public $Gebruiker;
    public $Bericht;

    public static function create_comment($FotoID, $Gebruiker = 'Test', $Bericht=''){
        if(!empty($FotoID) && !empty($Gebruiker) && !empty($Bericht)){
            $comment = new Comment();
            $comment->FotoID = (int)$FotoID;
            $comment->Gebruiker = $Gebruiker;
            $comment->Bericht = $Bericht;

            return $comment;
        }else{
            return false;
        }
    }

    public static function find_the_comment($FotoID){
        global $database;
        $sql = "SELECT * FROM " . self::$db_table;
        $sql .= " WHERE FotoID = " . $database->escape_string($FotoID);
        $sql .= " ORDER BY FotoID ASC";

        return self::find_this_query($sql);
    }
}

?>