<?php
switch ($vd->getSottoPagina()) {
    case 'anagrafica':
        include 'anagrafica.php';
        break;

    case 'modelli':
        include 'modelli.php';
        break;
    
    case 'modelli_modifica':
        include 'modelli.php';
        include 'modelli_modifica.php';
        break;
    
    case 'modelli_crea':
        include 'modelli.php';
        include 'modelli_crea.php';
        break;
    
    case 'utenti':
        include 'utenti.php';
        break;
    
    case 'el_modelli':
        include 'el_modelli.php';
        break;
    
    case 'el_modelli_json':
        include 'el_modelli_json.php';
        break;
        ?>
        

    <?php default: ?>
        <h2 class="icon-title" id="h-home">The Cuttin' Edge</h2>
        <p>
            Benvenuto, <?= $user->getUsername() ?>
        </p>
        <p>
            Seleziona uno dei seguenti campi:
        </p>
        <ul class="panel">
            <li><a href="user/anagrafica<?= $vd->scriviToken('?')?>" id="pnl-anagrafica">
                    Info Personali
                </a>
            </li>
            <li><a href="user/modelli<?= $vd->scriviToken('?')?>" id="pnl-iscrizione">Database Coltelli</a></li>
            <li><a href="user/utenti<?= $vd->scriviToken('?')?>" id="pnl-libretto">Lista Utenti</a></li>
            <li><a href="user/el_modelli<?= $vd->scriviToken('?')?>" id="pnl-cerca">Cerca Coltelli</a></li>
        </ul>
        <?php
        break;
}
?>


