
<script>
export default {
    data() {
        return {
            items: [
                { name: 'username 1', image: '/public/images/user.png', tagName: 'Tagname 1', connect: true, url: "#" },
                { name: 'username 2', image: '/public/images/user.png', tagName: 'Tagname 2', connect: false, url: "#" },
                { name: 'username 3', image: '/public/images/user.png', tagName: 'Tagname 3', connect: true, url: "#" },
                { name: 'username 4', image: '/public/images/user.png', tagName: 'Tagname 4', connect: true, url: "#" },
                { name: 'username 5', image: '/public/images/user.png', tagName: 'Tagname 5', connect: false, url: "#" }
            ],
            itemUser: [
                { nameUser: 'username', imageUser: '/public/images/user.png', tagNameUser: 'TagnameUser', connect: true, url: "#" },
       
            ],




            titleText: "pseudo",
        };
    },


    methods: {
    copierTagname(tagName) {
   
      navigator.clipboard.writeText(tagName);
    },
  },
};
</script>

<template>
    <div class="user-connect">
        <h5>Your friends</h5>


        <p>Connected</p>
       
        <div class="connected">

            <div class="online" v-for="(item, index) in items" :key="index">
                <a v-bind:href="item.url">

                    <div v-if="item.connect" class="item-connect">

                        <img :src="item.image" alt="Image" class="image-user">

                        <div class="info-user">
                            <p class="username">{{ item.name }} <img src="/public/images/green-ellipse.svg" alt=""></p>
                            <p class="tagName">#{{ item.tagName }} <img src="/public/images/copier.svg" alt=""
                                    class="copier" @click.prevent="copierTagname(item.tagName)" v-bind:title="titleText">
                            </p>
                        </div>

                    </div>
                </a>
            </div>

        </div>

        <p>Disconnected</p>
        <div class="disconnected">
            <div class="offline" v-for="(item, index) in items" :key="index">

                <a v-bind:href="item.url">
                    <div v-if="!item.connect" class="item-connect">

                        <img :src="item.image" alt="Image" class="image-user">

                        <div class="info-user">
                            <p class="username">{{ item.name }} <img src="/public/images/red-ellipse.svg" alt=""></p>
                            <p class="tagName">#{{ item.tagName }} <img src="/public/images/copier.svg" alt=""
                                    class="copier" @click.prevent="copierTagname(item.tagName)" v-bind:title="titleText">
                            </p>
                        </div>

                    </div>
                </a>
            </div>

        </div>


        <div class="online" v-for="(item, index) in itemUser" :key="index">
                <a v-bind:href="item.url">

        <div class="item-connect">

            <img src="/public/images/image-user-app.svg" alt="image-user-app" class="image-user-app">

            <div class="info-user">
                <p class="username-app">{{ item.nameUser }} </p>
                <p class="tagName-app">#{{ item.tagNameUser }}<img src="/public/images/copier.svg" alt="" class="copier" @click.prevent="copierTagname(item.tagNameUser)" v-bind:title="titleText">
                </p>
            </div>

        </div>
    </a>
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

.connected::-webkit-scrollbar {
  width: 2px; 
}

.online a , .offline a{
    text-decoration: none;
} 

.disconnected {
    height: 200px;
    overflow-y: auto;
    white-space: nowrap;
    scrollbar-color: transparent transparent;
}

.disconnected::-webkit-scrollbar {
  width: 2px; 
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
.tagName .copier{
    margin-left: 5px;
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