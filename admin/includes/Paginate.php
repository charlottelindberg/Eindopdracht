<?php


class Paginate
{
	//Input values that will be set by the calling page before querying the database
    public $current_page;
    public $items_per_page;
    
    //Output value that will be set by calculate_total_pages (called from Db_object)
    public $total_pages;

    public function __construct($page=1, $items_per_page=4)
    {
        $this->current_page = (int) $page;
        $this->items_per_page = (int) $items_per_page;
    }

    public function next(){
        return $this->current_page + 1;
    }

    public function previous(){
        return $this->current_page -1;
    }

    public function calculate_total_pages($items_total_count){
        $this->total_pages = ceil($items_total_count / $this->items_per_page);
    }

    public function has_previous(){
        return $this->previous() >= 1;
    }

    public function has_next(){
        return $this->next() <= $this->total_pages;
    }
    
    public function offset(){
        return ($this->current_page -1)* $this->items_per_page;
    }

}