<div class="input-form">
    <h3>Modifica coltello</h3>
    <form method="post" action="administrator/modelli_modifica<?= $vd->scriviToken('?')?>">
        <input type="hidden" name="modello" value="<?= $mod_model->getId() ?>"/>
        <label for="data">Data</label>
        <input type="text" name="data" id="data" value="<?= $mod_model->getData()->format('d/m/Y') ?>"/>
        <br/>
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" value="<?= $mod_model->getNome() ?>"/>
        <br/>
        <label for="descrizione">descrizione</label>
        <input type="text" name="descrizione" id="descrizione" value="<?= $mod_model->getDescrizione() ?>"/>
        <br/>
        <div class="btn-group">
            <button type="submit" name="cmd" value="a_salva">Salva</button>
            <button type="submit" name="cmd" value="a_annulla">Indietro</button>
        </div>
    </form>
</div>
