<?php require_once __DIR__ . '/cabecalho.php'; ?>

    <?php if($_SESSION['mensagem']): ?>
        <v-alert type="<?= $_SESSION['tipoMensagem'] ?>">
            <?= $_SESSION['mensagem'] ?>
        </v-alert>
    <?php endif; $_SESSION['mensagem'] = ''; $_SESSION['tipoMensagem'] = '' ?>

    <form action="criar-post" method="post">
            <v-textarea name="conteudo" label="O que você está pensando?" rows="2" outlined append-icon="mdi-account-check"></v-textarea>
            <v-col class="d-flex flex-row-reverse">
                <v-btn type="submit" color="primary">Publicar</v-btn>
            </v-col>
    </form>
    <br>
    <?php foreach ($posts as $post):?>

        <v-card>
            <v-card-title>
                <v-icon>mdi-account-circle</v-icon>
                <?= $post['nome'] ?>

                <?php if($post['nome'] === $_SESSION['nome_usuario']): ?>
                <v-spacer></v-spacer>
                <form method="post" action="/remove-post" onsubmit="return confirm('Você realmente deseja apagar essa publicação?')">
                    <v-btn name="id" type="submit" value="<?= $post['id'] ?>" icon color="error">
                        <v-icon>
                            mdi-delete
                        </v-icon>
                    </v-btn>
                </form>
                    <?php endif ?>
            </v-card-title>
                <v-card-subtitle>
                    <?=  (new DateTime($post['data_postagem']))->format('d/M/Y H:i:s') ?>
                </v-card-subtitle>
            <v-divider></v-divider>
            <v-container>
                <?= $post['texto'] ?>
                <br>
                    <v-btn text color="teal" class="mt-2">
                        Like
                    </v-btn>
            </v-container>
        </v-card>
        <br>

    <?php endforeach ?>
<?php require_once __DIR__ . '/rodape.php'; ?>
