<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('css/app.css')}}" rel="stylesheet" >

  @livewireStyles
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <v-app id="inspire">
        <v-app id="inspire">
          <v-navigation-drawer
            v-model="drawer"
            app
            clipped
          >
            <v-list dense>
              <v-list-item link>
                <v-list-item-action>
                  <v-icon>mdi-view-dashboard</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Dashboard</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item link>
                <v-list-item-action>                    
                  <v-icon>fa-users fa-fw</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Clients</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item link>
                <v-list-item-action>
                  <v-icon>mdi-cog</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Settings</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-navigation-drawer>
      
          <v-app-bar
            app
            clipped-left
          >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>e-Manager</v-toolbar-title>
          </v-app-bar>
      
          <v-main>
              <v-container>
                @yield('content')
              </v-container>
            
          </v-main>
      
          <v-footer app>
            <small>2020</small>
          </v-footer>
        </v-app>
      </v-app>
  </div>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>  
  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      props:{
        source: String,
      },
      data:{
        drawer: null,
      },
      created:function(){
          this.$vuetify.theme.dark = true
      }
    })
  </script>
</body>
</html>