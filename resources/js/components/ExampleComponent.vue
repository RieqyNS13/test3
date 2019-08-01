<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-list dense>

        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item-content>
        </v-list-item> 


        <v-list-item @click="test('asu')">
          <v-list-item-action>
            <v-icon>contact_mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Contact</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

    <v-list-group 
    sub-group
    prepend-icon="keyboard_arrow_down"
    value="true"
    no-action
      >
        <template v-slot:activator>
            <v-list-item-content> 
                <v-list-item-title>Daftar Dusun</v-list-item-title>
            </v-list-item-content>
        </template>
        <v-list-item-group v-model="model">
        <v-list-item 
            v-for="(dusun, i) in dataDusun"
            :key="i"
            link
            @click="test(dusun)" 
          >
            <v-list-item-title v-text="dusun.name"></v-list-item-title>
            <v-list-item-icon>
              <v-icon>home</v-icon>
            </v-list-item-icon>
          </v-list-item>
        </v-list-item-group>

    </v-list-group>


      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="indigo"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Application</v-toolbar-title>
    </v-app-bar>

    <v-content>
      <v-container
        fluid
      >
        <v-layout
          align-center
          justify-center
        >
          <v-flex xs12>

            <div class="google-map" id="map"></div>


          </v-flex>
          
        </v-layout>
      </v-container>
    </v-content>
    <v-footer
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    props: {
      source: String,
      dataDusun: Array,
      name: String

    },

    async mounted() {
        this.latLong.lat = this.dataDusun[0].Latitude;
        this.latLong.long = this.dataDusun[0].Longitude;
        this.initMap();
    },
    data: () => ({
      //name: 'google-map',
      model: 0,
      drawer: null,
      latLong:{
        lat:null,
        long:null
      },
      //mapName: this.name + "-map",
    }),
    methods:{
        test:function(data){
            this.latLong.lat = data.Latitude;
            this.latLong.long = data.Longitude;
            this.initMap(); 
            
            console.log(this.latLong.lat);
        },
        initMap:function(){
          console.log(this.dataDusun);     
          const element = document.getElementById("map")
          const options = {
            zoom: 16,
            center: new google.maps.LatLng(this.latLong.lat,this.latLong.long),
            mapTypeId: google.maps.MapTypeId.HYBRID 
          }
          const map = new google.maps.Map(element, options)

          console.log(element)  
      },
    },
    
  }
</script>
<style scoped>
.google-map {
  width: 100%;
  height: 600px;
  margin: auto;
  background: gray;
}
</style>