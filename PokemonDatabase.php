<?php 
include ("connection.php"); //**Print successful connection */
error_reporting(0); //**function to return no error messages */

//SQL QUERY STORED IN VARIABLES//
$query2 = "SELECT * FROM pokemonindex ORDER BY id"; /**SELECT all from pokeimage table QUERY  */
$data2 = mysqli_query($conn2, $query2);
$total = mysqli_num_rows($data2);

if($total!= 0)
{   
?>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
body{
  margin: 0;
  padding: 0;
 font-family: 'Roboto', sans-serif !important;
}

 table {
            margin-top: 1em;
            opacity:0.8;
        }
        h1, h3, h4 {
            text-align: center;
            text-shadow: 2px;
        }
        td {
            padding:8px;
        }

        #img:hover {
            transform: scale(1.1);

         }


        tr {
            border: 1px solid black;
            height: 10px;
        }

        tr:nth-child(even) {
            background-color: #b2d8d8;
        }
        tr:nth-child(odd) {
            background-color: aliceblue;
        }
        tr:hover {
            background-color: deepskyblue;
        }

        thead {
            background-color: #008080;
            font-weight: bold;
            font-size: larger;
            text-align: center;
            border: 2px solid black;
        }

        tbody {
            color: black;
            text-align: center;
        }

        tbody:hover {
            color: #3F4451;

        }
</style>
</head>
<body style ="background: url(https://wallpapercave.com/wp/wp1864337.jpg);">
<h1>POKEMON DATABASE</h1>
<h3>By: Takeya Mitchell</h3>
<h4>CIT-1103-01 Database Management</h4>
<table align='center'>
<thead>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<tr>
  <td id='img' style="background-color:#c79dd7;">Image</td>
        <td style="background-color:#c79dd7;">ID</td>
        <td style="background-color:#c79dd7;">Pokémon Number</td>
        <td style="background-color:#c79dd7;">Name</td>
        <td style="background-color:#c79dd7;">Hp</td>
        <td style="background-color:#c79dd7;">Atk</td>
        <td style="background-color:#c79dd7;">Def</td>
        <td style="background-color:#c79dd7;">Spa</td>
        <td style="background-color:#c79dd7;">Spd</td>
        <td style="background-color:#c79dd7;">Spe</td>
        <td style="background-color:#c79dd7;">Type</td>
        <td style="background-color:#c79dd7;">Ability</td>
        <td style="background-color:#c79dd7;">Hidden Ability</td> 
	</tr>
</thead>
<?php 

/**DISPLAY RESULTS OF SQL QUERY IN DATABASE */
while($result = mysqli_fetch_assoc($data2))
{
  echo "<tr>
            <td><img src='".$result['image']."' width='70' height='70'/></td>
	          <td>".$result['id']."</td>
            <td>".$result['pokemon_number']."</td>
            <td>".$result['pokemon_name']."</td>
            <td>".$result['hp']."</td>
            <td>".$result['atk']."</td>
            <td>".$result['def']."</td>
            <td>".$result['spa']."</td>
            <td>".$result['spd']."</td>
            <td>".$result['spe']."</td>
            <td>".$result['type']."</td>
            <td>".$result['ability']."</td>
            <td>".$result['hidden_ability']."</td>
          </tr>";
}
}
else {
	echo "No records found";
}

?>
</table>
</body>
</html>


