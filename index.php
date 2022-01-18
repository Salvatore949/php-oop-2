<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ciao</h1>

    <?php

       class Persona{
           private $nome;
           private $cognome;
           private $data_di_nascita;
       

       public function __construct($nome, $cognome) {

            $this -> nome = $nome;
            $this -> cognome = $cognome;
        }

        public function getnome(){
            return $this -> nome;
        }

        public function setnome($nome){
            return $this -> $nome;
        }

        public function getcognome(){
            return $this -> cognome;
        }

        public function setnome($cognome){
            return $this -> $cognome;
        }

        public function getdata_di_nascita(){
            return $this -> data_di_nascita;
        }

        public function setdata_di_nascita($data_di_nascita){
            return $this -> $data_di_nascita;
        }

        public function printFullPerson(){
            return $this -> nome . $this -> cognome . ":" . $this -> data_di_nascita;
        }   
        
        public function__toString(){
            return $this -> printFullPerson();
        }

        }

    ?>
</body>
</html>