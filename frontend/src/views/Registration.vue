<template>
    <div class="form-wrapper">
        <h1>Register to IdeaBook</h1>
        <form @submit.prevent="register" action="">
            <div v-if="errors" class="errors">
                <p v-for="(error, field) in errors" :key="field">
                    {{error[0]}}
                </p>
            </div>
            <input type="text" v-model="form.username" placeholder="Your username"><br>
            <input type="password" v-model="form.password" placeholder="Your password"><br>
            <input type="password.repeat" v-model="form.password_repeat" placeholder="Repeat password"><br>
            <button>Register</button>
            <router-link to="/login" class="link">Login</router-link>
        </form>
    </div>
</template>

<script>
 import authService from "../services/auth.service";
 
 export default {
     name: "Registration",
     data() {
         return {
             form: {
                 username: '',
                 password: '',
                 password_repeat: '',
             },
             errors: null
         }
     },
     methods: {
         async register() {
             const {success, errors} = await authService.register(this.form);
             if (success) {
                 this.$router.push({name: 'home'});
             } else {
                 this.errors = errors;
             }
         }
     }
 }
</script>

<style lang="scss">

</style>
