<h2 id="help" class="icon-title">Help</h2>
<?php
switch ($vd->getSottoPagina()) {
    case 'anagrafica':
        ?>
        <p>
            In questa pagina puoi modificare le tue informazioni,come:
        </p>
        <ul>
            <li>
                Le tue <strong>Informazioni generali</strong>.
            </li>
            <li>
                I tuoi <strong>contatti</strong>.
            </li>
            <li>
                La tua <strong>password</strong>.
            </li>
        </ul>
        <?php break; ?>

    <?php case 'modelli': ?>
        <p>
            In questa pagina puoi visualizzare il database dei coltelli.
        </p>
        <?php break; ?>

    <?php case 'utenti': ?>
        <p>
            In questa pagina puoi vedere le principali informazioni dei nostri utenti, come:
        </p>
        <ul>
            <li>Username</li>
            <li>Città</li>
            <li>Email</li>
        </ul>
        <?php break; ?>
    <?php case 'el_modelli': ?>
        <p>
            In questa pagina puoi cercare i coltelli, filtrando per Nome:
        </p>
        <?php break; ?>
    <?php default:
        ?>
        <p>
            Seleziona una dei seguenti campi:
        </p>
        <ol>
            <li>
                <strong>Info Personali</strong> per cambiare le tue info personali.
            </li>
            <li>
                <strong>Database Coltelli</strong> per vedere il database dei nostri coltelli.
            </li>
            <li>
                <strong>Lista Utenti</strong> per vedere la lista dei nostri utenti.
            </li>
            <li>
                <strong>Cerca Coltelli</strong> per cercare un coltello.
            </li>
        </ol>
        <?php break; ?>
<?php } ?>
