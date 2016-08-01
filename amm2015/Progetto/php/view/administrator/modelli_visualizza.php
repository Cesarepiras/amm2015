<div>
    <h3>Nome del coltello.</h3>
    <h4>
        <?= $mod_model->getNome() ?>
    </h4>
       
    <p>
         <h3>
            Data inserimento:
        </h3>
        <h4><?= $mod_model->getData()->format('d-m-Y') ?></h4>
    </p>
    <p>
        <h3>
            Descrizione:
        </h3>
        <h5><?= $mod_model->getDescrizione() ?></h5>
    </p>

</div>