<template>
    <div class="repository">
        <div class="repository-title">Repository</div>
    </div>
</template>

<script>
 export default {
     name: "Repository",
     components: {}
 }
</script>

<style lang="scss">
 .repository {
     background-color: rgba(30, 30, 30, 0.97);
     color: #fff;
     min-height: 300px;
     margin-right: 30px;

     .repository-title {
         text-align: center;
         font-size: 24px;
         padding: 10px 16px;
         font-weight: bold;
     }
 }
</style>
