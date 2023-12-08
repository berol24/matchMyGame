<template>
    <div class="my-parameter">

        <div class="arrow-left"><button><img src="/public/images/arrow_back.svg" alt="arrow_back"></button></div>
        <div class="container">
            <div class="profil-title">
                <h2>Paramètres du profil</h2>
                <p>Modifiez les informations d’identification de votre compte</p>
            </div>
            <div class="item item-userName">
                <div class="item-info">
                    <p>Username</p>
                    <div class="item-li">
                        <input type="text" class="input">
                        <button><img src="/public/images/Frame.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-info">
                    <p>Password</p>
                    <div class="item-li">
                        <input type="text" class="input">
                        <button><img src="/public/images/Frame.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-info">
                    <p class="bio">Bio</p>
                    <div class="item-li">
                        <input type="text" class="input last-input">
                        <button><img src="/public/images/Frame.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="picture">
                    <p>Profile picture</p>
                    <div><img src="/public/images/user.png" alt=""></div>
                    <button>change your picture</button>

                </div>
            </div>
            <div class="register-button"><button>register modification</button></div>
        </div>

    </div>
</template>

<script>

</script>

<style scoped>
.my-parameter {
    width: 1424px;
    height: 816px;
    border-radius: 8px;
    background: #3D3D3D;
}

.container {
    position: relative;
    margin-top: -41px;
}

.item {
    width: 987px;
    height: 150px;
    background: #2D2D2D;
    border: 1px white solid;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;

}

.item-info {
    width: 700px;
    height: 65px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-right: 47px;
}

.last-input {
    margin-left: 38px;
}

.item-info p {
    margin-right: 47px;
    color: white;
}


.item-li {
    display: flex;
    justify-content: center;
    align-items: center;
}

.item-li button {
    background: rgb(166, 166, 166);
    cursor: pointer;
    width: 30px;
    height: 30px;
    margin-left: 11px;
}

.item-li button img {
    width: 100%;
}

.input {
    width: 675px;
    height: 60px;
}

.item:nth-child(2) {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.item:nth-child(5) {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.item:last-child {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.picture {

    display: flex;
    justify-content: space-between;
    width: 787px;
    margin-left: 39px;
    align-items: center;
}

.picture img {
    width: 100%;
}

.picture button {
    width: 197px;
    height: 54px;
    border-radius: 8px;
    background: #FFF;
    border: none;

    color: var(--blue-violet, #772CE8);
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.32px;
    cursor: pointer;
}

.picture p {
    color: #FFF;
}

.register-button {
    width: 251px;
    height: 47px;
    border-radius: 5px;
    position: absolute;
    left: 954px;
    top: 716px;
}

.register-button button {
    background: white;
    width: 251px;
    height: 47px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: #772CE8;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.32px;
}


.profil-title {
    color: white;
    width: 385px;
    margin-left: 216px;
    margin-bottom: 29px;
}

.arrow-left {
    width: 65px;
    height: 70px;
    margin-left: 50px;
    position: relative;

}

.arrow-left button {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 63px;
    cursor: pointer;
}
</style>  