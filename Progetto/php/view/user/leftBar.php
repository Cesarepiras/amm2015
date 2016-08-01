<h2 class="icon-title">User</h2>
<ul>
    <li class="<?= $vd->getSottoPagina() == 'home' || $vd->getSottoPagina() == null ? 'current_page_item' : ''?>"><a href="user/home<?= $vd->scriviToken('?')?>">Home</a></li>
    <li class="<?= $vd->getSottoPagina() == 'anagrafica' ? 'current_page_item' : '' ?>"><a href="user/anagrafica<?= $vd->scriviToken('?')?>">Info Personali</a></li>
    <li class="<?= $vd->getSottoPagina() == 'appelli' ? 'current_page_item' : '' ?>"><a href="user/modelli<?= $vd->scriviToken('?')?>">Database Coltelli</a></li>
    <li class="<?= $vd->getSottoPagina() == 'reg_esami' ? 'current_page_item' : '' ?>"><a href="user/utenti<?= $vd->scriviToken('?')?>">Lista Utenti</a></li>
    <li class="<?= $vd->getSottoPagina() == 'el_modelli' ? 'current_page_item' : '' ?>"><a href="user/el_modelli<?= $vd->scriviToken('?')?>">Cerca Coltelli</a></li>
</ul>
