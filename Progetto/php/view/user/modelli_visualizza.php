<div>
    <h3>
        <?= $mod_model->getNome() ?>
    </h3>
    <p>
        <?= $mod_model->getData()->format('d-m-Y') ?>
    </p>
    <p>
        <?= $mod_model->getDescrizione() ?>
    </p>

</div>