<template>
  <v-container>
     <v-layout wrap>
         <v-flex xs10 offset-xs1>
      <div class="google-map" id="asu"></div>
        </v-flex>
    </v-layout>
</v-container>
</template>
<script>
export default {
  name: 'google-map',
  props: ['name'],
  data: function () {
    return {
      mapName: this.name + "-map",
    }
  },
  mounted: function () {
    const element = document.getElementById("asu")
    const options = {
      zoom: 14,
      center: new google.maps.LatLng(51.501527,-0.1921837)
    }
    const map = new google.maps.Map(element, options);
    console.log(element)
  }
};
</script>
<style scoped>
.google-map {
  width: 800px;
  height: 600px;
  margin: auto;
  background: gray;
}
</style>
