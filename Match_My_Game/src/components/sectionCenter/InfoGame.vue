<template>
    <div class="info-game">

        <div class="image-game">
            <img src="/public/images/jeu.png" alt="image-jeu">
        </div>
        <div class="description-game">
            <h4>Counter-Strike</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s</p>

            <div class="category">
                <button>Jeu de tir</button>
                <button>Stratégie</button>
                <button>Action</button>
            </div>

            <button class="suivre"> <img src="/public/images/coeur.svg" alt=""> suivre</button>




        </div>
    </div>
</template>

<script></script>

<style scoped>
.info-game {
    border-radius: 8px;
    background: var(--Onyx, #3D3D3D);
    width: 569px;
    height: 225px;
    margin: 37px 10px 0;
    display: flex;

}

.image-game {
    margin: 10px 22px;
}

.image-game img {
    max-width: 100%;
}

.description-game {
    margin: 10px;

}

.description-game h4 {
    color: #FFF;
    font-family: Poppins;
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin: 0px;
}


.description-game p {
    color: #FFF;
    font-family: Poppins;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top: 10px;
    margin-bottom: 0px;
    width: 366px;
    height: 65px;
}


.category button {
    color: var(--black, #000);
    font-family: Poppins;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;

    width: 71px;
    height: 18px;
    border-radius: 10px;
    background: var(--White, #FFF);
    border: none;
}

.category button:not(.category button:nth-child(1)) {
    margin-left: 20px;
}

.description-game .suivre {
    padding: 4px 5px;
    border-radius: 8px;
    background: var(--White, #FFF);
    display: flex;
    align-items: center;
    border: none;
    margin-top: 17px;
}

.description-game .suivre img {
    margin-right: 3px;
    margin-left: 5px;

}
</style>  