<template>
    <div class="board">
        <cards/>
    </div>    
</template>

<script>
import Cards from "./Cards.vue";

 export default {
     name: "Board",
     components: {Cards}
 }
</script>

<style lang="scss">
 .board {
     background-color: rgba(30, 30, 30, .97);
     padding: 20px;
 }
</style>
