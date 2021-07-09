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
             cards: []
         }
     },
     methods: {
         async addCard() {
             const {status, data} = await httpClient.post('card', {});
             if (status === 201) {
                 this.cards.unshift(data);
             }
         },
         async deleteCard(card) {
             const {status, data} = await httpClient.delete(`card/${card.id}`, {});
             if (status === 204) {
                 this.cards.splice(this.cards.indexOf(card), 1);
             }
         },
         async cardUpdated(card) {
             const {status, data} = await httpClient.put(`card/${card.id}`, card);
             if (status === 200) {
                 //this.cards.unshift(data);
             }
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
