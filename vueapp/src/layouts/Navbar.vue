<template>
    <div class="navbar">
        Welcome, {{user.username}}
        <a class="link" href="/logout" @click="logout" style="color: #fff;">Logout</a>
    </div>
</template>

<script>
 export default {
     name: "Navbar",
     props: {
         user: Object
     },
     methods: {
         logout() {
             console.log('logout');
         }
     }
 }
</script>

<style style="scss" scoped>
 .navbar {
     color: #f2f2f2;
     background-color: #333;
     position: fixed;
     top: 0;
     width: 100%;
     text-align: left;
     margin: 0;
     padding: 15px;
     z-index: 1000;
     
     a {
         color: #fff;
         text-decoration: none;
         padding: 14px;
     }
 }
</style>
