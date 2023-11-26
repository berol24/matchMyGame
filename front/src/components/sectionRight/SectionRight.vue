
<script>

import UserProfil from "./UserProfil.vue";
import ChatUser from "./ChatUser.vue";
import Bloc1 from "./Bloc1.vue";
import Bloc2 from "./Bloc2.vue";
import Bloc3 from "./Bloc3.vue";

export default {
    components: { UserProfil, ChatUser, Bloc1, Bloc2, Bloc3 }
}

</script>

<template>
    <div class="section-right">
        <div class="section-right-2">
            <user-profil />
            <chat-user />
            <bloc1 />
            <bloc2 />
            <bloc3 />
        </div>

    </div>
</template>


<style scoped>
.section-right {
    background-color: blue;
    width: 350px;
    height: 816px;
    border-radius: 8px;
    background: #2D2D2D;
    display: flex;
    justify-content: center;
    align-items: center;
}

.section-right-2 {
    border-radius: 10px;
    background: #343434;
    width: 315px;
    height: 772px;

}
</style>  