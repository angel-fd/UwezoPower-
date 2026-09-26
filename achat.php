<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwezoPower - Achat Cash Power</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #374b61ff; padding-bottom: 10px; margin-bottom: 20px; }
        .header h2 { margin: 0; color: #30455cff; }
        .menu-dropdown { position: relative; display: inline-block; }
        .menu-btn { background: none; border: none; font-size: 24px; cursor: pointer; color: #333; }
        .dropdown-content { display: none; position: absolute; right: 0; background-color: #ffffff; min-width: 180px; box-shadow: 0px 8px 16px rgba(0,0,0,0.2); border-radius: 5px; z-index: 1; }
        .dropdown-content a { color: #333; padding: 12px 16px; text-decoration: none; display: block; font-size: 14px; }
        .dropdown-content a:hover { background-color: #f1f1f1; }
        .menu-dropdown:hover .dropdown-content { display: block; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; color: #333; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .btn-group { display: flex; justify-content: space-between; margin-top: 20px; }
        .btn { padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; text-decoration: none; text-align: center; }
        .btn-back { background-color: #6c757d; color: white; }
        .btn-submit { background-color: #41714cff; color: white; }
        .btn:hover { opacity: 0.9; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>UwezoPower - SNEL Nguba</h2>
        <div class="menu-dropdown">
            <button class="menu-btn">&#8285;</button>
            <div class="dropdown-content">
                <a href="instructions.php">&#128161; En savoir plus (Aide)</a>
                <a href="historique.php">&#128200; Historique des achats</a>
            </div>
        </div>
    </div>

    <form action="recu.php" method="POST">
        <h3>Informations du Compteur</h3>
        <div class="form-group">
            <label for="nom">Nom du Titulaire :</label>
            <input type="text" id="nom" name="nom" placeholder="Ex: Fadhili Angel" required>
        </div>

        <div class="form-group">
            <label for="avenue">Avenue (Quartier Nguba) :</label>
            <input type="text" id="avenue" name="avenue" placeholder="Ex: Avenue de la Montagne" required>
        </div>

        <div class="form-group">
            <label for="compteur">Numéro de Compteur (11 chiffres) :</label>
            <input type="text" id="compteur" name="compteur" pattern="[0-9]{11}" maxlength="11" placeholder="Ex: 37123456789" required>
        </div>

        <h3>Détails du Paiement Mobile Money</h3>
        <div class="form-group">
            <label for="montant">Montant à acheter (CDF) :</label>
            <input type="number" id="montant" name="montant" min="1000" placeholder="Entrez le montant en CDF (Ex: 8000)" required>
        </div>

        <div class="form-group">
            <label for="num_client">Votre Numéro Mobile Money :</label>
            <input type="tel" id="num_client" name="num_client" placeholder="Ex: 0991234567" required>
        </div>

        <div class="form-group">
            <label for="num_snel">Numéro Agent / Compte SNEL Récepteur :</label>
            <input type="text" id="num_snel" name="num_snel" value="SNEL-NGUBA-01 (0850000000)" readonly style="background-color: #e9ecef;">
        </div>

        <div class="btn-group">
            <a href="index.php" class="btn btn-back">&#8592; Retour à l'accueil</a>
            <button type="submit" class="btn btn-submit">Confirmer & Valider &#10004;</button>
        </div>
    </form>
</div>

</body>
</html>
