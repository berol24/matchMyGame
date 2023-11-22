<template>
    <div class="section-search">
        <div class="search">
            <input type="text" name="" id="">
            <span class="material-symbols-outlined logo-search">search</span>
        </div>
        <div class="game-list" v-horiz-scroll>
            <ul style="color: white;">
                <li>League of legend</li>
                <li>Valorant</li>
                <li>Fornite</li>
                <li>CSGO</li>
                <li>Rocket League</li>
            </ul>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>
.search {
    position: relative;
    display: flex;
    align-items: center;


}

input {
    width: 500px;
    height: 35px;
    border-radius: 100px;
    border: none;
    background: #000;
    margin: 10px 44px 0 45px;
    color: white;
}

.logo-search {

    color: White;
    position: absolute;
    top: 16px;
    left: 500px;


}

.game-list {
    border-radius: 30px;
    background: var(--black, #000);
    width: 346px;

    height: 54px;
    margin: 10px auto;
}

.game-list ul {

    display: flex;
    justify-content: space-between;
    align-items: center;


    width: 300px;
    overflow-x: auto;
    white-space: nowrap;

    scrollbar-width: thin;


    scrollbar-color: transparent transparent;


}

.game-list ul::-webkit-scrollbar {
  width: 2px; 
}


.game-list ul li:not(li:nth-child(1)) {
    list-style: none;
    color: #FFF;
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    padding: 15px 0px;
    margin-left: 50px;


}

.game-list ul li:not(li:nth-child(1)):hover {
    border-radius: 8px;
    background-color: var(--l, #A6A6A6);
    padding: 5px;
    color: black;

}


.game-list ul li:nth-child(1) {
    list-style: none;
    color: var(--White, #FFF);
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: -25px;

}

.game-list ul li:nth-child(1):hover {
    border-radius: 8px;
    background-color: var(--l, #A6A6A6);
    padding: 5px;
    color: black;

}
</style>  