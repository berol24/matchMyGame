<script>

</script>

<template>
   <div class="accueil">   
    <section-left class="left" />
    <section-center class="center"/>
    <section-right class="right"/>
    <!-- <my-parameter class="parameter"/> -->
    
 </div>

</template>

<style scoped>

.accueil{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.left , .center , .right {
  margin: 8px;
}

.left{
  width: 469px; 
}

.parameter{

width: 1440px;
height: 832px;
padding: 8px;
background: var(--black, #000);
}

</style>
