<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

       class Persona{
           private $nome;
           private $cognome;
           private $dataNascita;
       

        public function __construct($nome, $cognome) {

                $this -> setNome = ($Nome);
                $this -> setCognome = ($Cognome);
            }

            public function getNome(){
                return $this -> nome;
            }

            public function setNome($nome){
                return $this -> nome = $nome;
            }

            public function getCognome(){
                return $this -> cognome;
            }

            public function setCognome($cognome){
                return $this -> cognome = $cognome;
            }

            public function getDataNascita(){
                return $this -> dataNascita;
            }

            public function setDataNascita($dataNascita){
                return $this -> dataNascita = $dataNascita;
            }

            public function printFullPerson(){
                return $this -> getNome() . $this -> getCognome() . ":" . $this -> getDataNascita();
            }   
            
            public function __toString(){
                return $this -> printFullPerson();
            }

        }

        class Employee extends Persona{
            private $stipendio;
            private $dataAssunzione;
        

            public function __construct($nome,$cognome,$stipendio){
                parent:: __construct($nome,$cognome);
                $this -> setStipendio($stipendio);
            }

            public function getStipendio(){
                return $this -> stipendio;
            }

            public function setStipendio($stipendio){
                return $this -> stipendio = $stipendio;
            }

            public function getdataAssunzione(){
                return $this -> stipendio;
            }

            public function setddataAssunzione($dataAssunzione){
                return $this -> dataAssunzione = $dataAssunzione;
            }

            public function printFullEmployee(){
                return $this -> getNome() . $this -> getCognome() . ":" . $this -> getStipendio() . $this -> getdataAssunzione();
            }   
            
            public function __toString(){
                return $this -> printFullEmployee();
            }
        }

        $p1 = new Persona ("Luca","Di Simone");
        $p2 = new Persona ("Alessio", "Foraci");
    
        $p1 -> setNome("Luca");
        $p2 -> setNome("Alessio");
        echo $p1 ."<br>";
        echo $p2;

        $e1 = new Employee("Ruggero","Franco", $stipendio);
        $e2 = new Employee("Ilario", "La galla", $stipendio);
    

        $e1 -> setStipendio("1670£");
        $e2 -> setStipendio("800£");
        
        echo $e1 . "<br>";
        echo $e2;
    
    ?>
  </body>
 </html>