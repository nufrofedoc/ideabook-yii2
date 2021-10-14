<template>
	<div class="card">
		<div class="card-header">
            <span @click="deleteCard" class="card-close">X</span>
		</div>
        <div class="card-title" contenteditable="" @blur="titleChanged">
            {{card.title}} 
        </div>
		<div class="card-body text-left" contenteditable="" @blur="bodyChanged">
            {{card.body}}
		</div>
	</div>
</template>

<script>
 export default {
     name: "Card",
     props: {
         card: {
             type: Object,
             required: true
         }
     },
     methods: {
         deleteCard() {
             this.$emit('deleteCard', this.card);
         },
         titleChanged($event) {
             this.card.title = $event.target.innerHTML;
             this.$emit('cardUpdated', this.card);
         },
         bodyChanged($event) {
             this.card.body = $event.target.innerHTML;
             this.$emit('cardUpdated', this.card);
         }
     }
 }
</script>

<style lang="scss">
 .card {
     background-color: #2F242C;
     color: #F0F7F4;
     border-radius: 8px;
     width: 280px;
     margin: 0 10px 20px;
     box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.2);
     transition: all 0.5s;
     cursor: pointer;
     font-family: 'Nothing You Could Do';
     transition: .5s ease;
     border-radius: 0;
     &-header {
         border-radius: 0;
     }
     &-header {
         transition: .5s ease;
     }
     &:hover {
         transform: perspective(1em) rotateX(-0.3deg) rotateY(0deg) rotateZ(0deg);
     }
     &-body {
         position: relative;
         z-index: 0;
         overflow: hidden;
         padding-top: 2rem;
         padding-bottom: 2rem;
     }

     .card-header {
         padding: 10px 16px 0;
         .card-close {
             display: inline-block;
             width: 24px;
             height: 24px;
             border-radius: 50%;
             line-height: 24px;
             text-align: center;
             transition: all 0.3s;

             &:hover {
                 background-color: rgba(0, 0, 0, 0.2);
             }

             &:focus {
                 box-shadow: inset 2px 3px 0px rgba(0, 0, 0, 0.8);
             }
         }

         .card-close {
             float: right;
         }
     }
     .card-title {
         font-size: 24px;
         padding: 10px 16px;
         font-weight: bold;
     }

     .card-body {
         font-size: 20px;
         padding: 10px 16px 16px;
     }
 }
</style>
