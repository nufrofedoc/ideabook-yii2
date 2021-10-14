<template>
<div class="navbar">
  <h1 class="heading">IdeaBook</h1>
  <div class="login__block">
    Welcome, {{user.username}}
    <a class="javascript:void(0);" @click="logout" style="color: #fff;">Logout</a>
  </div>
</div>
</template>

<script>
import authService from '../services/auth.service';
 
 export default {
     name: "Navbar",
     props: {
         user: Object
     },
     methods: {
         logout() {
             authService.logout();
         }
     }
 }
</script>

<style style="scss" scoped>
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #f2f2f2;
    background-color: rgba(30, 30, 30, .97);
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
.navbar .heading {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin: 0;
    padding: 0;
    text-align: center;
    color: #fff;
}
</style>
