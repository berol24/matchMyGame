<script>

export default {
    data() {
        return {
            items: [
                { name: 'username 1', image: '/public/images/image4.png', tagName: 'Tagname 1', connect: false },
                { name: 'username 2', image: '/public/images/image2.png', tagName: 'Tagname 2', connect: true },
                { name: 'username 3', image: '/public/images/image3.png', tagName: 'Tagname 3', connect: false },
                { name: 'username 4', image: '/public/images/image5.png', tagName: 'Tagname 4', connect: true },
                { name: 'username 5', image: '/public/images/image3.png', tagName: 'Tagname 5', connect: true }
            ],
            url: "/public/images/green-ellipse.svg",
            titleText: "pseudo",
        }
    },

    methods: {
    copierTagname(tagName) {
   
      navigator.clipboard.writeText(tagName);
    },
  },




}
</script>

<template>
    <div class="user-list">

        <div v-for="(item, index) in items" :key="index" class="item">

            <img :src="item.image" alt="Image" class="image-user">


            <div class="info-user">
                <p v-if="item.connect" class="username">{{ item.name }} <img :src="url" alt=""> </p>
                <p v-else class="username">{{ item.name }} <img src="/public/images/red-ellipse.svg" alt=""> </p>
                <p class="tagName">#{{ item.tagName }} <img src="/public/images/copier.svg" alt="" class="copier" @click.prevent="copierTagname(item.tagName)" v-bind:title="titleText"></p>
            </div>
        </div>



    </div>
</template>



<style scoped>
.user-list {
    margin: 37px auto 0;
    height: 380px;
    width: 569px;
    overflow-y: auto;
    white-space: nowrap;
    scrollbar-color: transparent transparent;
    scrollbar-width: thin;


}
.user-list::-webkit-scrollbar {
  width: 2px; 
}

.item {
    width: 569px;
    border-radius: 8px;
    background: var(--Onyx, #3D3D3D);
    margin: 10px auto;
    height: 100px;
    display: flex;
    align-items: flex-start;

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





</style>  