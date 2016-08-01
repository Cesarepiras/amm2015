<h2 class="icon-title">Administrator</h2>
<ul>
    <li class="<?= $vd->getSottoPagina() == 'home' || $vd->getSottoPagina() == null ? 'current_page_item' : ''?>"><a href="administrator/home<?= $vd->scriviToken('?')?>">Home</a></li>
    <li class="<?= $vd->getSottoPagina() == 'anagrafica' ? 'current_page_item' : '' ?>"><a href="administrator/anagrafica<?= $vd->scriviToken('?')?>">Info Personali</a></li>
    <li class="<?= $vd->getSottoPagina() == 'appelli' ? 'current_page_item' : '' ?>"><a href="administrator/modelli<?= $vd->scriviToken('?')?>">Database Coltelli</a></li>
    <li class="<?= $vd->getSottoPagina() == 'reg_esami' ? 'current_page_item' : '' ?>"><a href="administrator/utenti<?= $vd->scriviToken('?')?>">Lista Utenti</a></li>
    <li class="<?= $vd->getSottoPagina() == 'el_esami' ? 'current_page_item' : '' ?>"><a href="administrator/el_modelli<?= $vd->scriviToken('?')?>">Cerca</a></li>
</ul>
