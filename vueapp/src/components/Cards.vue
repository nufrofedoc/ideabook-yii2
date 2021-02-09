<template>
    <div class="cards-wrapper">
        <add-new-button />
        <div class="cards">
            <card v-for="(card, index) in cards" :key="index" :card="card" />
        </div>
    </div>
</template>

<script>
 import AddNewButton from "./buttons/AddNewButton.vue";
 import Card from "./Card.vue";
 
 export default {
     name: "Cards",
     components: {Card, AddNewButton},
     data() {
         return {
             cards: [
                 {
                     title: 'Lorem Ipsum',
                     body: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been'
                 },
                 {
                     title: 'Lorem Ipsum',
                     body: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been'
                 },
                 {
                     title: 'Lorem Ipsum',
                     body: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been'
                 },
             ]
         }
     }
 }
</script>

<style lang="scss">
 @import url('https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap');

 body {
     background-color: #ffeeff;
     font-family: 'Nothing You Could Do';
 }

 .heading {
     text-align: center;
 }

 .cards-wrapper {
     .cards {
         display: flex;
         justify-content: center;
         flex-wrap: wrap;
         margin: 0 auto;
     }
 }

</style>
