<template>
    <div id="default-layout">
        <navbar :user="user" />
        <router-view />
    </div>
</template>

<script>
 import Navbar from "./Navbar";
 import authService from "../services/auth.service.js";
 
 export default {
     name: "DefaultLayout",
     components: {Navbar},
     data() {
         return {
             user: {}
         }
     },
     async beforeMount() {
         this.user = await authService.getUser();
     }
 }
</script>

<style lang="scss" scoped>
 #default-layout {
     padding-top: 50px;
 }
</style>
