<div class="row">
<?php foreach ($fight->getFighters() as $pokemon): ?>

        <div class="card col-6">
            <div class="card-header class-header-primary">
                <?= $pokemon->getName() ?>
                <img
                    class="rounded-circle"
                    src="<?= $pokemon->getImageUrl() ?>"
                    width="150px"
                    height="150px"
                    alt="pikachuFeuGigamax">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Points : <?= $pokemon->getHp() ?>
                </li>
                <li class="list-group-item">
                    Min Attack Points : <?= $pokemon->getAttackPokemon()->getMinAttack() ?>
                </li>
                <li class="list-group-item">
                    Max Attack Points : <?= $pokemon->getAttackPokemon()->getMaxAttack() ?>
                </li>
                <li class="list-group-item">
                    Special Attack : <?= $pokemon->getAttackPokemon()->getSpecialAttack() ?>
                </li>
                <li class="list-group-item">
                    Probability Special Attack : <?= $pokemon->getAttackPokemon()->getProbabilitySpecialAttack() ?>
                </li>
            </ul>
        </div>
<?php endforeach ?>
</div>