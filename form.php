
<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Formulaire PHP</title>
    </head>
    <body>
        <br>
        <br>
        <br>
        <form action="/informations.php" method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name">
        </div>
        <br>
        <div>
            <label  for="telephone">Portable :</label>
            <input  type="number"  id="Portable"  name="phone_user">
        </div>
        <br>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <br>
        <div>
            <label for="object">Sujet:</label>
                <select id="object" name="object">
                <option value="claim">Réclamation</option>
                <option value="reminder">Demander à être rappelé</option>
                <option value="duplicate">Demander un duplicata de votre facture</option>
                </select>
        </div>
        <br>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <br>
        <div  class="button">
        <br>
        <button  type="submit">Envoyer votre message</button>
        </div>
        </form>
       

    </body>
</html>
