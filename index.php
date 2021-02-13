<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 2</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<style>
body {
  padding: 100px;
  display: column;
  justify-content: center;
  font-family: 'Roboto', sans-serif;
}


input {
  margin: 5px 20px;
  height: 25px;
  background-color: #fafafa;
  color: black;
  border-radius: 20px;
  outline: none;
  max-width: 70px;
  text-align: center;
}
button {
  border: none;
  border-radius: 100px;
  outline:none;
  background-color: purple;
  cursor: pointer;
  color: white;
  font-weight:700;
  padding: 10px 20px;
  margin: auto 0px;
}

.data {
  display: column;
  justify-content: center;
  align-content: center;
  align-items: center;
  position: relative;
  flex-wrap: wrap;
  font-size: 2.5rem;
}
.headerText {
  font-size: 2.7rem;
  color: black;
  display: flex;
  flex-wrap:wrap;
  justify-content: center;
  font-weight: 700;
}

#result {
  margin-top: 20px;
  color: green;
  font-weight: 900;
}
</style>
<body>
  <div class="headerText">
    <p>Realice un programa en PHP que permita realzar el calculo del área de un octágono regular con valores dinámicos.</p>
  </div>
  <div class="data">
  <div >
    <label for="first">Longitud de Lados: </label>
    <input id="lados" type="text" value="0cm">
  </div>
    <span>
      <button onclick="calculate()">Calcular</button>
    </span>

    <div style="margin-left: 20px;">
      <span id="result"></span>
    </div>
    
</body>
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>  
<script>
  function calculate() {
    const lados = $("#lados").val();
    $.ajax({
            url:"process.php",    //the page containing php script
            type:"POST",  
            data:"lados="+lados,  
            success:function(result){  
              $("#result").text(`El area del octagono regular es: ${result}cm`)
            }  
      
        });
  }
</script>

<?php
if(isset($_POST["registration"])) {
  echo $_POST["registration"]."---".$_POST["email"];  
}
?>
</html>