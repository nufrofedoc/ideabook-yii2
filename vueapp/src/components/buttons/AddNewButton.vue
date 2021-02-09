<template>
    <button @click="addCard" class="new-card-btn">New Idea</button>
</template>

<script>
 export default {
     name: "AddNewButton",
     methods: {
         addCard() {
             this.$emit('addCard');
         }
     }
 }
</script>

<style lang="scss">
 .new-card-btn {
     width: 200px;
     display: block;
     margin: 0 auto 20px;
     background-color: #FFF;
     padding: 10px 32px;
     border: 1px solid #e0e0e0;
     font-size: 26px;
     outline: 0;
     transition: all 0.3s;
     cursor: pointer;
     font-family: 'Nothing You Could Do';

     &:hover {
         box-shadow: 0 5px 7px rgba(0, 0, 0, 0.1);
     }

     &:active {
         position: relative;
         top: 1px;
     }
 }
</style>
