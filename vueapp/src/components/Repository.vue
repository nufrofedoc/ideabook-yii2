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
     background-color: #474c49;
     color: #fff;
     min-height: 500px;
     margin-right: 30px;
     opacity: .8;

     .repository-title {
         text-align: center;
         font-size: 24px;
         padding: 10px 16px;
         font-weight: bold;
     }
     &:hover {
         opacity: 1;
     }     
 }
</style>
