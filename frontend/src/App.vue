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
     background: url('https://images.unsplash.com/photo-1551125735-900f662aeb07?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80');
     background-color: #ececec;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Nothing You Could Do';
 }
</style>
