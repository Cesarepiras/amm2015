<h2 class="icon-title" id="h-iscrizione">Database Coltelli</h2>
<h4>Info Utente</h1>
<ul class="none">
    <li><strong>Userame:</strong> <?= $user->getUsername() ?></li>
</ul>

<?php if (count($models) > 0) { ?>
    <table>
        <thead>
            <tr>
                <th class="iscrizione-col-small">ID</th>
                <th class="iscrizione-col-small">Data</th>
                <th class="iscrizione-col-small">Nome</th>
                <th class="iscrizione-col-small">Descrizione</th>
                <th class="iscrizione-col-small">Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($models as $model) {
                ?>
                <tr <?= $i % 2 == 0 ? 'class="alt-row"' : '' ?>>
                    <td><?= $model->getId() ?></td>
                    <td><?= $model->getData()->format('d/m/Y') ?></td>
                    <td><?= $model->getNome() ?></td>
                    <td><?= $model->getDescrizione() ?></td>
                    <td>Apri</td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
<?php } else { ?>
    <p>Empty database</p>
<?php } ?>

