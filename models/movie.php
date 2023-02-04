<?php 

class Movies{
   public $titleMovie;
   public $artDirector;
   public $yearProduction;
   public $movieType;

   function __construct($_titleMovie, $_artDirector, $_yearProduction, $_movieType)
   {
      $this->titleMovie = $_titleMovie;
      $this->artDirector = $_artDirector;
      $this->yearProduction = $_yearProduction;
      $this->movieType = $_movieType;
   }


   public function GetTitleMovie(){
      return $this->titleMovie;
   }







}
?>