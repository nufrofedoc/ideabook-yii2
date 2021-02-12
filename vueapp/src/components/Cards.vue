<template>
    <div class="cards-wrapper">
        <add-new-button @addCard="addCard" />
        <div class="cards">
            <card v-for="(card, index) in cards" :key="index" :card="card"
                  @deleteCard="deleteCard" @cardUpdated="cardUpdated" />
        </div>
    </div>
</template>

<script>
 import AddNewButton from "./buttons/AddNewButton.vue";
 import Card from "./Card.vue";
 import httpClient from "../services/http.service";
 
 export default {
     name: "Cards",
     components: {Card, AddNewButton},
     data() {
         return {
             cards: [
             ]
         }
     },
     methods: {
         addCard() {
             this.cards.unshift({title: '', body: ''});
         },
         deleteCard(card) {
             this.cards.splice(this.cards.indexOf(card), 1);
         },
         cardUpdated(card) {
             
         }
     },
     async mounted() {
         const {status, data} = await httpClient.get('card');
         if (status === 200) {
             this.cards = data;
         }
     }
 }
</script>

<style lang="scss">
.cards-wrapper {
     .cards {
         display: flex;
         justify-content: center;
         flex-wrap: wrap;
         margin: 0 auto;
     }
 }

</style>
