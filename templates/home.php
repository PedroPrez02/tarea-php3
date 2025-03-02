<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty API</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Personajes de Rick and Morty</h1>

    <div class="container">
        <?php if (!empty($characters)): ?>
            <?php foreach ($characters as $character): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($character['image']) ?>" alt="<?= htmlspecialchars($character['name']) ?>">
                    <h2><?= htmlspecialchars($character['name']) ?></h2>
                    <p><strong>Especie:</strong> <?= htmlspecialchars($character['species']) ?></p>
                    <p><strong>Estado:</strong> <?= htmlspecialchars($character['status']) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No se encontraron personajes.</p>
        <?php endif; ?>
    </div>
</body>
</html>
