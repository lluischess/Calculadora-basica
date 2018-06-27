 <!DOCTYPE html>
 <html>
 <head>
    <title>Calculadora</title>
 </head>
 <body>
   <form method="post" action="PHP Calculadora.php">

      <input type="text" name="numero1" id="numero1">

         <select name="Opciones" id="Opciones">
            <option value="0">suma</option>
            <option value="1">resta</option>
            <option value="2">multiplicar</option>
            <option value="3">dividir</option>
         </select>
         <input type="text" name="numero2" id="numero2">

         <input type="submit" name="calcular" value="Calcular">

   </form>
 </body>
 </html>


 <?php 
 class calculadora
         {
            private $num1;
            private $num2;
            private $operacion;
            private $res;
         
               
            public function __construct()
            {

            }
            
            public function getres()
            {
               return $this->res;
            }
            public function getnumero1()
            {
               return $this->num1;
            }
            public function getnumero2()
            {
               return $this->num2;
            }
            public function getoperacion()
            {
               return $this->operacion;
            }


            public function  setnumero1($num1)
            {
               $this->num1 = $num1;
            }
            public function  setnumero2($num2)
            {
               $this->num2 = $num2;
            }
            public function  setoperacion($operacion)
            {
               $this->operacion = $operacion;
            }

            public function calcular ()
            {
               try{
                  $n1 = intval($this->num1);
                  $n2 = intval($this->num2);
                  $res;

                  switch ($this->operacion) {
                     case '0':
                        $res = $n1 + $n2;
                        break;
                     
                     case '1':
                        $res = $n1 - $n2;
                        break;

                     case '2':
                         $res = $n1 * $n2;
                        break;

                     case '3':

                        if ($n2 <> 0) {
                         $res = $n1 / $n2;
                        }
                        else{
                           $res = "No se puede dividir entre 0";
                        }
                        break;
                  }
                  $this->res = $res;
               }
               catch(Exception $e){

               }
            }

         }

         if(!isset($_POST['numero1']) and !isset($_POST['numero2'])){return;}
         $num1 = $_POST['numero1'];
         $num2 = $_POST['numero2'];
         $operacion = $_POST['Opciones'];


         $calculadora = new Calculadora;

         $calculadora->setnumero1($num1);
         $calculadora->setnumero2($num2);
         $calculadora->setoperacion($operacion);

         $calculadora->calcular();

         $resultat = $calculadora->getres();

         
         echo "El resultado es:". $resultat;
         
?>