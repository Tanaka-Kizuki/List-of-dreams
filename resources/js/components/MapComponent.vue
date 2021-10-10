<template>
    <div id="map">
        <div ref="map" style="height:500px;width:100%;"></div>
    </div>
</template>

<script>
export default {
  data(){
    return {
      map:'',
      myLatLng:{lat: -34.397, lng: 150.644},
    }
  },
  mounted(){
    let timer = setInterval(() => {
      if(window.google){
        clearInterval(timer);
        this.map = new window.google.maps.Map(this.$refs.map, {
          center: this.myLatLng,
          zoom: 8
        });
        new window.google.maps.Marker({position:this.myLatLng,map:this.map})
      }
    },500)
  }
}
</script>