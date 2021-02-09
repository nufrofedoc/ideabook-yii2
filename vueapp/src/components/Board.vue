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
     background-color: #12632b9c;
     padding: 20px;
     border: 10px solid #eeec;
 }
</style>
