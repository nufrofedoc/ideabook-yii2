<template>
    <div class="form-wrapper">
        <h1>Login to DraftBook</h1>
        <form @submit.prevent="login" action="">
            <div v-if="errors" class="errors">
                <p v-for="(error, field) in errors" :key="field">
                    {{error[0]}}
                </p>
            </div>
            <input type="text" v-model="form.username" placeholder="Your username"><br>
            <input type="password" v-model="form.password" placeholder="Your password"><br>
            <button>Login</button>
            <router-link to="/register" class="link">Register</router-link>
        </form>
    </div>
</template>

<script>
 import axios from 'axios';
 import authService from '../services/auth.service';
 
 export default {
    name: "Login",
     data() {
         return {
             form: {
                 username: '',
                 password: '',
             },
             errors: null
         }
     },
     methods: {
         async login() {
             console.log("Login", this.form);
             const {success, errors} = await authService.login(this.form);
            if (success) {
                this.$router.push({name: 'home'})
            } else {
                this.errors = errors;
            }
         }
     }
 }
</script>

<style lang="scss">
 .errors {
     background-color: #ff3333;
     color: #ffffff;
     padding: 3px;

     p {
       padding-left: 20px;
     }
 }
</style>
