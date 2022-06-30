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
         $tabela.= '<tr>';
         $tabela.= '<td>*</td>';

         for ($i=0; $i < 10; $i++) { 
            $tabela .= '<td>'.$i.'</td>' ;
         };

         $tabela.= '</tr>';

         for ($i=0; $i < 10; $i++) { 

            $tabela.= '<tr><td>' . $i;
            for ($j=0; $j < 10; $j++) { 
               $result = $j*$i;
               $tabela .= '<td>'.$result.'</td>';
            };
            $tabela.='</td></tr>';
         };
         echo $tabela;
      ?>
   </table>
</body>
</html>


