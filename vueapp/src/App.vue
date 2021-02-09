<template>
    <div id="app">
        <h1 class="heading">DraftBook</h1>        
        <div class="left">
            <repository />
        </div>
        <div class="right">
            <board />
        </div>
  </div>
</template>

<script>
 import Board from "./components/Board.vue";
 import Repository from "./components/Repository.vue";
 
 export default {
     name: 'App',
     components: {Board, Repository}
}
</script>

<style lang="scss">
 .left {
     float: left;
     width: 30%;
 }
 .right {
     float: left;
     width: 70%;
 }
</style>
