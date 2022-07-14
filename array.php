<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }   
    a{
        text-decoration: none;
    }


</style>
<body>
    <table>
        <tr>
            <td>
                Time
                <div>
                    <a href="#">🔼</a>
                    <a href="#">🔽</a>
                </div>
            </td>
            <td>
                Pontos
                <div>
                    <a href="#">🔼</a>
                    <a href="#">🔽</a>
                </div>
            </td>
        </tr>
        <?php
            $teams = [
                "Atlético-PR" => 30,
                "Botafogo"=>29,
                "Corinthians"=>26,
                "Cruzeiro"=>31,
                "Grêmio"=>31,
            ];
            krsort($teams);
            foreach ($teams as $key => $value) {
                echo "<tr>";
                echo "<td>" .$key. "</td>";
                echo "<td>" .$value. "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

