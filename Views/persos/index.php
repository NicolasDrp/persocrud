<?php require_once 'Views/head.php'; ?>

<a href="../perso/create">Ajouter un Personnage</a>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Classe</th>
        <th>Race</th>
        <th>Statistique d'attaque</th>
        <th>Statistique de défense</th>
    </tr>
    <?php foreach ($persos as $perso) : ?>
        <tr>
            <td><?= $perso->getId() ?></td>
            <td><?= $perso->getName() ?></td>
            <td><?= $perso->getClass() ?></td>
            <td><?= $perso->getRace() ?></td>
            <td><?= $perso->getStatAtk() ?></td>
            <td><?= $perso->getStatDef() ?></td>
            <td><button>Supprimer</button></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>