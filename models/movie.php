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

   public function GetArtDirectorMovie(){
      return $this->artDirector;
   }

   public function GetYearMovie(){
      return $this->yearProduction;
   }

   public function GetTypeMovie(){
      return $this->movieType;
   }


   public function toPrintAll() {
      return $this->GetTitleMovie() .' - '. $this->GetArtDirectorMovie() .' - '. $this->GetYearMovie() .' - '. $this->GetTypeMovie();
   }

}
?>