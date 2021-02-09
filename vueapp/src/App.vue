<template>
    <div id="app">
        <router-view/>
    </div>
</template>

<style lang="scss">
 html,
 body,
 #app {
     padding: 0;
     margin: 0;
     height: 100%;
 }

 * {
     box-sizing: border-box;
 }

 @import url('https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap');

 body {
     background-color: #ececec;
     font-family: 'Nothing You Could Do';
 } 
</style>
