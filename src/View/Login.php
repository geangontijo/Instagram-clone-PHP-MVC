<?php require_once __DIR__ . '/cabecalho.php'; ?>

<?php if($_SESSION['mensagem']): ?>
        <v-alert type="<?= $_SESSION['tipoMensagem'] ?>">
            <?= $_SESSION['mensagem'] ?>
        </v-alert>
    <?php endif; $_SESSION['mensagem'] = ''; $_SESSION['tipoMensagem'] = '' ?>

    <v-card color="teal lighten-4" tile>
        <v-card-title>
            Entrar no instagram
        </v-card-title>
        <v-container>
            <v-form method="post" action="/realiza-login">
            <v-text-field  name="user" label="Nome"></v-text-field>
            <v-text-field name="senha" label="Senha"></v-text-field>
            <v-btn type="submit" color="success">Login</v-btn>
            </v-form >
        </v-container>
    </v-card>

    <br>

    <v-card color="teal lighten-4">
        <v-card-title>
            Cadastrar
        </v-card-title>

        <v-card-content>
            <v-container>
                <form id="form-cadastro" action="realiza-cadastro" method="post">
                <v-text-field name="nome" id="nome" label="Nome"></v-text-field>
                <v-text-field name="email" label="Email"></v-text-field>
                <v-text-field name="telefone" label="Telefone"></v-text-field>
                <v-text-field type="password" name="senha" label="Senha"></v-text-field>
                <v-btn type="submit" color="success">Cadastrar</v-btn>
                </form>
            </v-container>
        </v-card-content>
    </v-card>

<?php require_once __DIR__ . '/rodape.php';?>