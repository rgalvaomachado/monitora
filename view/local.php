<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/geral.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <script src="public/js/jquery-1.11.1.min.js"></script>
    <script src="public/js/usuario.js"></script>
    <script src="public/js/dialog.js"></script>
</head>
<body>
    <?php // include_once('check.php') ?>
    <?php include_once('menu.php') ?>
    <div id="content">
        <label id="RepostaController"></label>
        <br>
        <label>Locais</label>
        <table class='grid'>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Senha</td>
                    <td>Tipo</td>
                    <td></td>
                    <td class='criar' onclick="abrirDialogCriar()">Criar</td>
                </tr>
            </thead>
            <tbody id='listGrid'>
            </tbody>
        </table>
        <script>list()</script>
    </div>

    <dialog id="dialogCriar">
        <h1>Criar Usuario</h1>
        <form id="criar">
            <label>Nome</label>
            <br>
            <input name="nomeCriar" id="nomeCriar" type="text" required>
            <br>
            <label>Email</label>
            <br>
            <input name="emailCriar" id="emailCriar" type="email" required>
            <br>
            <label>Senha</label>
            <br>
            <input name="senhaCriar" id="senhaCriar" type="text" required>
            <br>
            <label>Tipo</label>
            <br>
            <select name="tipoCriar" id="tipoCriar">
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
            </select>
            <br>
            <input type="submit" value="Criar">
            <input type="button" value="Cancelar" onclick="fecharDialogCriar()">
        </form>
    </dialog>

    <dialog id="dialogEditar">
        <h1>Editar Categoria</h1>
        <form id="editar">
            <br>
            <input type="hidden" id="infosEditar">
            <input type="hidden" id="idEditar">
            <label>Nome</label>
            <br>
            <input name="nomeEditar" id="nomeEditar" type="text" required>
            <br>
            <label>Email</label>
            <br>
            <input name="emailEditar" id="emailEditar" type="email" required>
            <br>
            <label>Senha</label>
            <br>
            <input name="senhaEditar" id="senhaEditar" type="text" required>
            <br>
            <label>Tipo</label>
            <br>
            <select id='tipoEditar'></select>
            <br>
            <input type="submit" value="Editar">
            <input type="button" value="Cancelar" onclick="fecharDialogEditar()">
        </form>
    </dialog>
    
    <dialog id="dialogDeletar">
        <h1>Deletar</h1>
        <form id="deletar">
            <label>Deseja realmente deletar <label id="nomeDeletar"></label>?</label>
            <br>
            <input type="hidden" id="infosDeletar">
            <input type="hidden" id="idDeletar">
            <input type="submit" value="Deletar">
            <input type="button" value="Cancelar" onclick="fecharDialogDeletar()">
        </form>
    </dialog>
</body>
</html>