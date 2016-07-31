<h2 id="help" class="icon-title">Help</h2>
<?php
switch ($vd->getSottoPagina()) {
    case 'anagrafica':
        ?>
        <p>
            In questa pagina puoi visualizzare e modificare:
        </p>
        <ul>
            <li>
                Le tue <strong>Info generiche</strong>.
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
            In questa pagina puoi editare, cancellare e inserire foto di coltelli:
        </p>
        <ul>
            <li>
                Aggiungi nuovi coltelli premendo :<em>Carica nuovo coltello</em>.
            </li>
            <li>
                Modifica un coltello premendo :<em>Modifica coltello</em>, 
                <img  src="../images/edit-action.png" alt="icona modifica">.
            </li>
            <li>
                Cancellare un coltello dal database premendo : <em>Cancella coltello</em>, 
                <img  src="../images/delete-action.png" alt="icona elimina">.
            </li>
        </ul>
        <?php break; ?>

    <?php case 'utenti': ?>
        <p>
            In questa pagina puoi vedere le informazioni sugli utenti, come:
        </p>
        <ul>
            <li>Username</li>
            <li>Città</li>
            <li>Email</li>
        </ul>
        <?php break; ?>
    <?php case 'el_modelli': ?>
        <p>
            In questa pagina puoi cercare coltelli filtrando per nome.
        </p>
        <?php break; ?>
    <?php default:
        ?>
        <p>
            Seleziona una dei seguenti campi:
        </p>
        <ol>
            <li>
                <strong>Info Personali</strong> per vedere e modificare le tue info personali.
            </li>
            <li>
                <strong>Database Coltelli</strong> per vedere il database dei nostri coltelli.
            </li>
            <li>
                <strong>Lista utenti</strong> per vedere la lista degli utenti del sito .
            </li>
            <li>
                <strong>Cerca coltello</strong> per cercare coltelli nel database.
            </li>
        </ol>
        <?php break; ?>
<?php } ?>
