<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>UwezoPower - Historique des transactions</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #0056b3; border-bottom: 2px solid #0056b3; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #0056b3; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .summary { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 5px; font-weight: bold; }
        .btn { display: inline-block; padding: 10px 20px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>&#128200; Inventaire & Historique des Achats (Nguba)</h2>
    
    <table>
        <thead>
            <tr>
                <th>Date / Heure</th>
                <th>Abonné</th>
                <th>Avenue</th>
                <th>Compteur</th>
                <th>Montant (CDF)</th>
                <th>kWh Net</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>14/09/2026 14:10</td>
                <td>Fadhili Angel</td>
                <td>Av. de la Montagne</td>
                <td>37123456789</td>
                <td>8 000 CDF</td>
                <td>13.83 kWh</td>
            </tr>
            <tr>
                <td>14/09/2026 11:30</td>
                <td>Landry Radjabu</td>
                <td>Av. Nguba</td>
                <td>37987654321</td>
                <td>60 000 CDF</td>
                <td>103.75 kWh</td>
            </tr>
        </tbody>
    </table>

    <div class="summary">
        <p>Total de clients servis aujourd'hui : 2</p>
        <p>Total des recettes encaissées : 68 000 CDF</p>
    </div>

    <a href="achat.php" class="btn">&#8592; Retour au formulaire</a>
</div>

</body>
</html>
