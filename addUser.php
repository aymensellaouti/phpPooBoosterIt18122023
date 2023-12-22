<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Add User</title>
</head>
<body>
<div class="container">
<form action="handleAddUser.php"
      method="post"
>
    <fieldset>
        <legend>Ajouter un utilisateur</legend>
        <div class="form-group">
            <label for="name" class="col-sm-2 col-form-label">name</label>
            <div>
                <input
                    required
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Veuillez saisir le nom de l'étudiant"
                    name="name"
                >
            </div>
            <label for="birthday" class="col-sm-2 col-form-label">
                Date de naissance
            </label>
            <div>
                <input
                    required
                    type="date"
                    class="form-control"
                    id="birthday"
                    name="birthday"
                >
            </div>
        </div>        
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
</div>
</body>
</html>