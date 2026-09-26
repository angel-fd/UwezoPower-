<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opération Finalisée - UwezoPower</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
        body { background-color: #eef2f7; display: flex; justify-content: center; padding: 40px 15px; margin: 0; }
        .container { width: 100%; max-width: 500px; }
        .receipt-card { background: white; border-radius: 16px; box-shadow: 0 8px 24px rgba(0,0,0,0.08); padding: 30px; border-top: 6px solid #198754; }
        .text-center { text-align: center; }
        .congrats-title { color: #198754; font-size: 22px; font-weight: bold; margin: 10px 0 5px 0; }
        .congrats-sub { color: #6c757d; font-size: 14px; margin-bottom: 25px; }
        .badge { display: inline-block; background: #d1e7dd; color: #0f5132; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: bold; }
        .info-group { margin-bottom: 15px; }
        .label { color: #6c757d; font-size: 12px; display: block; }
        .value { font-weight: bold; font-size: 16px; color: #333; }
        .jeton-box { background-color: #eef5ff; border: 2px dashed #533362ff; border-radius: 10px; padding: 15px; text-align: center; margin: 25px 0; }
        .jeton-label { font-size: 11px; font-weight: bold; color: #573972ff; text-transform: uppercase; display: block; margin-bottom: 5px; }
        .jeton-value { font-size: 20px; font-weight: bold; color: #583567ff; letter-spacing: 2px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
        table td { padding: 8px 0; font-size: 14px; border-bottom: 1px solid #eee; }
        table td.text-end { text-align: right; }
        .text-danger { color: #854349ff; }
        .total-row td { font-weight: bold; border-top: 2px solid #333; border-bottom: none; font-size: 15px; }
        .kwh-row td { background: #eef5ff; color: #583b6fff; font-weight: bold; font-size: 16px; padding: 10px; border-radius: 6px; border: none; }
        .btn-group { display: flex; gap: 10px; }
        .btn { flex: 1; padding: 12px; border: none; border-radius: 8px; font-weight: bold; font-size: 14px; cursor: pointer; text-align: center; text-decoration: none; display: inline-block; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn-primary { background: #485974ff; color: white; }
        @media print {
            body { background: white; padding: 0; }
            .receipt-card { box-shadow: none; border: none; }
            .d-print-none { display: none; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="receipt-card">
        <div class="text-center">
            <span class="badge">🎉 Opération Réussie</span>
            <div class="congrats-title">Félicitations !</div>
            <div class="congrats-sub">Vous avez finalisé vos opérations avec succès.</div>
        </div>
        
        <div class="info-group">
            <span class="label">Numéro de Compteur :</span>
            <span class="value"><?php echo htmlspecialchars($_GET['compteur'] ?? '04291686220'); ?></span>
        </div>

        <div class="jeton-box">
            <span class="jeton-label">Code Jeton à saisir sur le compteur (20 chiffres)</span>
            <span class="jeton-value"><?php echo htmlspecialchars($_GET['jeton'] ?? '2344 3333 9309 2380 7837'); ?></span>
        </div>

        <table>
            <tr>
                <td style="color: #6c757d;">Montant Payé :</td>
                <td class="text-end" style="font-weight: bold;"><?php echo number_format($_GET['brut'] ?? 10000, 0, ',', ' '); ?> CDF</td>
            </tr>
            <tr>
                <td style="color: #6c757d;">Déduction TVA (16%) :</td>
                <td class="text-end text-danger">- <?php echo number_format($_GET['tva'] ?? 1600, 0, ',', ' '); ?> CDF</td>
            </tr>
            <tr>
                <td style="color: #6c757d;">Éclairage Public (1%) :</td>
                <td class="text-end text-danger">- <?php echo number_format($_GET['eclairage'] ?? 100, 0, ',', ' '); ?> CDF</td>
            </tr>
            <tr class="total-row">
                <td>Montant Net d'énergie :</td>
                <td class="text-end"><?php echo number_format($_GET['net'] ?? 8300, 0, ',', ' '); ?> CDF</td>
            </tr>
            <tr><td colspan="2" style="border:none; height: 10px;"></td></tr>
            <tr class="kwh-row">
                <td>Total Énergie Générée :</td>
                <td class="text-end"><?php echo htmlspecialchars($_GET['kwh'] ?? '42.8'); ?> kWh</td>
            </tr>
        </table>

        <div class="btn-group d-print-none">
            <button onclick="window.print()" class="btn btn-secondary">Imprimer le reçu</button>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>

</body>
</html>

