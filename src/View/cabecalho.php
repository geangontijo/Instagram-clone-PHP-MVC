<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <style>
        a{
            text-decoration: none; /* no underline */
        }
    </style>
</head>
<body>

<div id="app">
    <v-app id="inspire">
        <v-app id="inspire">
    <?php if($_SESSION['logado']): ?>
            <v-navigation-drawer color="teal" v-model="drawer" app clipped dark>

                <?php if($_SESSION['logado']): ?>
                    <v-list-item link>
                        <v-list-item-action>
                            <v-icon>mdi-account-circle</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>
                                <?= $_SESSION['nome_usuario'] ?>
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                <?php endif; ?>

                <template v-for="(item, i) in items">
                    <v-row v-if="item.heading" :key="i" align="center">
                        <v-col cols="6">
                            <v-subheader v-if="item.heading">
                                {{ item.heading }}
                            </v-subheader>
                        </v-col>
                        <v-col cols="6" class="text-right">
                            <v-btn small text>
                                edit
                            </v-btn>
                        </v-col>
                    </v-row>
                    <v-divider v-else-if="item.divider" :key="i" dark class="my-4"></v-divider>
                    <v-list-item :href="item.path" v-else :key="i" link>
                        <v-list-item-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>
                                {{ item.text }}
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </template>
            </v-navigation-drawer>
        <?php endif; ?>

            <v-app-bar app clipped-left color="teal lighten-1" dark>
                <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                <v-toolbar-title>
                    <a href="/login">
                        <v-icon>mdi-instagram</v-icon>
                    </a>
                    Instagram
                </v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn icon href="/logout">
                    <v-icon>mdi-logout</v-icon>
                </v-btn>
            </v-app-bar>

            <v-main>
                <v-container>
