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
         login() {
             console.log('Login', this.form);
         }
     }
 }
</script>

<style lang="scss">

</style>
