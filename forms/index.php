<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Jumbotron Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
    <div class="Jumbotron">
        <form class="form-horizontal" action="/php7-Anthony/forms/resultats.php" method="POST">
                <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="mail"placeholder="Enter email">
        </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Votre message</label>
    <div class="col-sm-10">
      <input type="text-area" name="message" class="form-control" id="text-area" placeholder="Dis nous tout">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Envoyer</button>
    </div>
  </div>
</form>
</div>
    </body>
</html>
