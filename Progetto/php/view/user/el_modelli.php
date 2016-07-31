<h2 class="icon-title" id="h-cerca">Cerca coltelli</h2>
<div class="error">
    <div>
        <ul><li>Testo</li></ul>
    </div>
</div>
<div class="input-form">
    <form>
    <h3>Filtra</h3>
        <label for="nome">Nome</label>
        <input name="nome" id="nome" type="text"/>
        <br/>
        <label for="descrizione">Descrizione</label>
        <input name="descrizione" id="descrizione" type="text"/>
        <br/>
        <button id="filtra" type="submit" name="cmd" value="e_cerca">Cerca coltelli</button>
    </form>
</div>



<h3>Coltelli trovati</h3>

<p id="nessuno">Nessun coltello trovato</p>

<table id="tabella_coltelli">
    <thead>
        <tr>
            <th>Id</th>
            <th>Data</th>
            <th>Nome</th>
            <th>Descrizione</th>
        </tr>
    </thead>
    <tbody>

        <tr >
            <td> id </td>
            <td> data </td>
            <td> nome </td>
            <td> descrizione </td>

        </tr>

    </tbody>
</table>
