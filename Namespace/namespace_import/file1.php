<?php 
namespace User\Data\Info;
class userData{
	    private $user_id;
	    private $user_name;
	 public function __construct($id,$name){
	 	  $this->user_id=$id;
	 	  $this->user_name=$name;
	 }
	public function getUser(){
		  return array('id'=>$this->user_id,'name'=>$this->user_name);
	}
}