<script>
import Search from "./Search.vue";
import InfoGame from "./InfoGame.vue";
import UserList from "./UserList.vue";




export default {
    components: { Search, InfoGame, UserList }
}


</script>

<template>
    <div class="section-center">

        <search />
        <info-game />
        <user-list />
    </div>
</template>



<style scoped>
.section-center {
    width: 589px;
    height: 816px;
    border-radius: 8px;
    background: #2D2D2D;

}
</style>  