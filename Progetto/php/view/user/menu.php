<ul>
    <li class="<?= strpos($vd->getSottoPagina(),'home') !== false || $vd->getSottoPagina() == null ? 'current_page_item' : ''?>"><a href="user/home<?= $vd->scriviToken('?')?>">Home</a></li>
    <li class="<?= strpos($vd->getSottoPagina(),'anagrafica') !== false ? 'current_page_item' : '' ?>"><a href="user/anagrafica<?= $vd->scriviToken('?')?>">Info Personali </a></li>
    <li class="<?= strpos($vd->getSottoPagina(), 'modelli') !== false ? 'current_page_item' : '' ?>"><a href="user/modelli<?= $vd->scriviToken('?')?>">Database Coltelli</a></li>
    <li class="<?= strpos($vd->getSottoPagina(),'utenti') !== false ? 'current_page_item' : '' ?>"><a href="user/utenti<?= $vd->scriviToken('?')?>">Lista Utenti</a></li>
    <li class="<?= strpos($vd->getSottoPagina(),'el_modelli') !== false ? 'current_page_item' : '' ?>"><a href="user/el_modelli<?= $vd->scriviToken('?')?>">Cerca Coltelli</a></li>
</ul>
