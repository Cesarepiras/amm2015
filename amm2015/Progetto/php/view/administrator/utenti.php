<h2 class="icon-title" id="h-iscrizione">Lista utenti</h2>
<h4>Info Admin</h1>
<ul class="none">
    <li><strong>Nome:</strong> <?= $user->getNome() ?></li>
    <li><strong>Cognome:</strong> <?= $user->getCognome() ?></li>
</ul>

<?php if (count($utenti) > 0) { ?>
    <table>
        <thead>
            <tr>
                <th class="iscrizione-col-small">Username</th>
                <th class="iscrizione-col-small">Città</th>
                <th class="iscrizione-col-small">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($utenti as $utente) {
                ?>
                <tr <?= $i % 2 == 0 ? 'class="alt-row"' : '' ?>>
                    <td><?= $utente->getUsername() ?></td>
                    <td><?= $utente->getCitta() ?></td>
                    <td><?= $utente->getEmail() ?></td>
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

