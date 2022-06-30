<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<style>
   table {
      display: flex;
      justify-content: center;
      align-items: center;
   }
   td{
      padding: 6px;
      border: 1px solid black;
   }

</style>

<body>
   <table>
      <?php
         //adicionando linha na tabela
         $tabela.= '<tr>';

         //adicionando o * como primeiro elemento
         $tabela.= '<td>*</td>';

         // adicionando a linha de 0 a 9
         for ($i=0; $i < 10; $i++) { 
            $tabela .= '<td>'.$i.'</td>' ;
         };

         // fechando tag da linha
         $tabela.= '</tr>';

         // for que adiciona a coluna de 0 a 9
         for ($i=0; $i < 10; $i++) { 
            //criando nova linha e elemento (de 0 a 9)
            $tabela.= '<tr><td>' . $i;

            //for que adiciona a tabuada do numero referente a linha "i"
            for ($j=0; $j < 10; $j++) { 
               $result = $j*$i;
               $tabela .= '<td>'.$result.'</td>';
            };
            // fechando tag do elemento e linha
            $tabela.='</td></tr>';
         };
         //printa a tabela
         echo $tabela;
      ?>
   </table>
</body>
</html>


