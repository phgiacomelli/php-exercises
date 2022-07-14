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
      <tr>
         <?php
            //adicionando o * como primeiro elemento
            $table = '<td>*</td>';
      
            // adicionando a linha de 0 a 9
            for ($i=0; $i < 10; $i++) { 
               $table .= '<td>'.$i.'</td>';
            };
         ?>
      </tr>
      <?php
        // for que adiciona a coluna de 0 a 9
         for ($i=0; $i < 10; $i++) { 
            //criando nova linha e elemento (de 0 a 9)
            $table .= '<tr><td>' . $i;

            //for que adiciona a tabuada do numero referente a linha "i"
            for ($j=0; $j < 10; $j++) { 
               $result = $j*$i;
               $table .= '<td>'.$result.'</td>';
            };

            // fechando tag do elemento e linha
            $table.='</td></tr>';
         };
         //printa a tabela
         echo $table;
      ?>
   </table>
</body>
</html>


