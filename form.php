<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>`CURD`</title>
      <style>
        body{
          background-color:#2B3E50;
          width: 600px; 
          margin: 20px auto;
        }
        
      </style>
    </head>
  <body>
    <h2 class="formText">Nieuwe melding te late student</h2>
    <div class="container">
      <form action="index.php">

        <label for="fname">Naam student</label>
        <input type="text" id="fname" name="firstname" placeholder="Naam..">

        <label for="lname">Klas</label>
        <input type="text" id="lname" name="lastname" placeholder="Klas..">

        <label for="country">Minuten te laat</label>
        <select id="country" name="country">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
        </select>

        <label for="subject">Reden te laat</label>
        <textarea id="subject" name="subject" placeholder="Reden te laat.." style="height:200px"></textarea>

        <input type="submit" value="Opslaan">
      </form>
    </div>
  </body>
</html>