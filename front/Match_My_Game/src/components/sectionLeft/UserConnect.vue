
<script>
export default {
    data() {
        return {
            items: [
                { name: 'username 1', image: '/public/images/user.png', tagName: 'Tagname', connect: true },
                { name: 'username 2', image: '/public/images/user.png', tagName: 'Tagname', connect: false },
                { name: 'username 3', image: '/public/images/user.png', tagName: 'Tagname', connect: true },
                { name: 'username 4', image: '/public/images/user.png', tagName: 'Tagname', connect: true },
                { name: 'username 5', image: '/public/images/user.png', tagName: 'Tagname', connect: false }
            ]
        };
    }
};
</script>

<template>
    <div class="user-connect">
        <h5>Your friends</h5>


        <p>Connected</p>
        <div class="connected">
            <div class="online" v-for="(item, index) in items" :key="index">


                <div v-if="item.connect" class="item-connect">

                    <img :src="item.image" alt="Image" class="image-user">

                    <div class="info-user">
                        <p class="username">{{ item.name }} <img src="/public/images/green-ellipse.svg" alt=""></p>
                        <p class="tagName">#{{ item.tagName }} <img src="/public/images/copier.svg" alt="" class="copier">
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <p>Disconnected</p>
        <div class="disconnected">
            <div class="offline" v-for="(item, index) in items" :key="index">


                <div v-if="!item.connect" class="item-connect">

                    <img :src="item.image" alt="Image" class="image-user">

                    <div class="info-user">
                        <p class="username">{{ item.name }} <img src="/public/images/red-ellipse.svg" alt=""></p>
                        <p class="tagName">#{{ item.tagName }} <img src="/public/images/copier.svg" alt="" class="copier">
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="item-connect">

            <img src="/public/images/image-user-app.svg" alt="image-user-app" class="image-user-app">

            <div class="info-user">
                <p class="username-app">user-name-app</p>
                <p class="tagName-app">#TagnameUserapp<img src="/public/images/copier.svg" alt="" class="copier">
                </p>
            </div>

        </div>

    </div>
</template>


<style scoped>
.user-connect {
    width: 469px;
    height: 693px;
    border-radius: 8px;
    background: var(--Jet, #2D2D2D);
    margin-top: 9px;



}

.user-connect h5 {
    color: #FFF;
    font-family: Poppins;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin: 0;
    padding: 37px 0 0 5px;

}

.user-connect p {
    color: var(--White, #FFF);
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin: 11px 5px;
}



.item-connect,
.item-disconnect {
    width: 458px;
    height: 90px;
    border-radius: 8px;
    background: var(--Onyx, #3D3D3D);
    margin: 10px auto;
    display: flex;
    align-items: start;



}

.connected {
    height: 250px;
    overflow-y: auto;
    white-space: nowrap;
    scrollbar-color: transparent transparent;
}

.disconnected {
    height: 200px;
    overflow-y: auto;
    white-space: nowrap;
    scrollbar-color: transparent transparent;
}




.image-user {
    width: 70px;
    height: 70px;
    margin: 10px 25px 10px 14px;

}

.username {
    color: var(--White, #FFF);
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.32px;
    margin-top: 10px;

}

.username-app {
    color: var(--White, #FFF);
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.32px;
    margin-top: 10px;

}

.tagName {
    color: var(--Platinium, #E0E0E0);
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.28px;

    margin-top: -10px;
    display: flex;
    justify-content: space-between;


}

.tagName-app {
    color: var(--Platinium, #E0E0E0);
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.28px;

    margin-top: -10px;
    margin-top: -10px;
    display: flex;
    justify-content: space-between;


}

.tagName-app img {
    margin-left: 12px;


}

.image-user-app {
    margin-left: 14px;
    margin-right: 25px;
    margin-top: 10px;
}
</style>  