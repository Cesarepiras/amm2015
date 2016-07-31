<div class="input-form">
    <h3>Inserisci Coltello</h3>
    <form method="post" action="administrator/modelli_crea<?= $vd->scriviToken('?')?>">
        <input type="hidden" name="cmd" value="a_nuovo"/>
        <label for="data">Data</label>
        <input type="text" name="data" id="data"/>
        <br/>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"/>
        <br/>
        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione"/>
        <br/>
        <div class="btn-group">
            <button type="submit" name="cmd" value="a_nuovo">Salva</button>
            <button type="submit" name="cmd" value="a_annulla">Indietro</button>
        </div>
    </form>
</div>
