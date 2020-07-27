<?php require_once __DIR__ . '/cabecalho.php'; ?>

        <h1>Meu perfil</h1>

    <br>
    <v-text-field label="Nome" value="<?= $_SESSION['nome_usuario'] ?>" id="nome" append-icon="mdi-pencil"></v-text-field>
    <v-text-field label="E-mail" value="<?= '' ?>"></v-text-field>

<?php require_once __DIR__ . '/rodape.php';?>
