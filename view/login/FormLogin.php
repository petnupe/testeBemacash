<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/Login" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" class="form-control" value="peterson@tecbiz.com.br">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" value="123456">
        </div>
        <button class="btn btn-success btn-block">Entrar</button>
    </form>
<?php include __DIR__ . '/../fim-html.php'; ?>