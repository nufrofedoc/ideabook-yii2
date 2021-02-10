<template>
    <div id="auth-layout">
        <router-view />
    </div>
</template>

<script>
 export default {
     name: "AuthLayout"
 }
</script>

<style lang="scss">
 $maincolor:#3B3B98;
 $textcolor:#fff;
 
 #auth-layout {
     padding: 50px;

     .form-wrapper {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         /* height: 100vh; */

         form {
             font-family: Arial;
             width: 40%;
             box-shadow: 1px 0 10px 15px rgba(0, 0, 0, .3);
             padding: 40px;
             background-color: #fff;

             input {
                 width: 100%;
                 box-sizing: border-box;
                 margin-top: 20px;
                 outline: none;
                 border: none;
                 background-color: #ecf0f1;
                 padding: 10px;
                 line-height: 2;
                 font-size: 16px;
             }

             button {
                 background-color: #4834d4;
                 color: $textcolor;
                 font-size: 18px;
                 width: 100%;
                 outline: none;
                 border: none;
                 padding: 15px;
                 margin: 20px 0;
                 cursor: pointer;

                 &:hover {
                     background-color: #686de0;
                 }

             }
             .link {
                 text-align: center;
                 text-decoration: none;
                 color: $maincolor;
                 padding-left: 3px;

                 &:hover {
                     text-decoration: none;
                 }
             }
         }
     }

     @media(max-width:692px) {
         .form-wrapper {
             form {
                 width: 60%;
             }
         }
     }

     @media(max-width:452px) {
         .form-wrapper {
             form {
                 width: 70%;
                 padding: 25px;

                 p {
                     font-size: 14px;
                 }
             }
         }
     }
 }
</style>
