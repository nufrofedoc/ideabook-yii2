<template>
    <div class="home">
        <h1 class="heading">IdeaBook</h1>
        <div class="left">
            <repository />
        </div>
        <div class="right">
            <board />
        </div>
    </div>
</template>

<script>
 // @ is an alias to /src

 import Board from "../components/Board.vue";
 import Repository from "../components/Repository.vue";
 
 export default {
     name: 'Home',
     components: {Board, Repository}
 }
</script>

<style lang="scss">
 .heading {
     text-align: center;
 }
 
 .left {
     float: left;
     width: 30%;
 }
 .right {
     float: left;
     width: 70%;
 }
</style>
