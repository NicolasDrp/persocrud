<?php require_once 'Views/head.php'; ?>

<form action="../perso/create" method="post">
    <div class="form-group">
        <label for="name">Nom du personnage</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="class">Classe</label>
        <input type="text" name="class" id="class" class="form-control">
    </div>
    <div class="form-group">
        <label for="race">Race</label>
        <input type="text" name="race" id="race" class="form-control">
    </div>
    <div class="form-group">
        <label for="statAtk">Statistique d'attaque</label>
        <input type="number" name="statAtk" id="statAtk" class="form-control">
    </div>
    <div class="form-group">
        <label for="statDef">Statistique de défense</label>
        <input type="number" name="statDef" id="statDef" class="form-control">
    </div>
    <button class="btn btn-primary">Ajouter</button>
</form>

<?php require_once 'Views/foot.php'; ?>