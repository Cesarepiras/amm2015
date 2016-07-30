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
            In this page you can view the infos of all the users in our database, such as:
        </p>
        <ul>
            <li>Username</li>
            <li>City</li>
            <li>Email</li>
        </ul>
        <?php break; ?>
    <?php case 'el_modelli': ?>
        <p>
            In this page you can search for the models in our database. You can filter by:
        </p>
        <ul>
            <li>Uploader</li>
            <li>Name</li>
        </ul>
        <?php break; ?>
    <?php default:
        ?>
        <p>
            Select one of the following sections of your 3D world:
        </p>
        <ol>
            <li>
                <strong>Personal Infos</strong> to edit your account's infos, such as your email or password.
            </li>
            <li>
                <strong>3d models database</strong> to view all the beautiful models on our database.
            </li>
            <li>
                <strong>Users List</strong> to access the complete list of our users.
            </li>
            <li>
                <strong>Search models</strong> to search for a model.
            </li>
        </ol>
        <?php break; ?>
<?php } ?>
