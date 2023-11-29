<template>
    <div class="bloc2">
        <div class="image-user-commun">
            <div class="photo">
                <img src="/public/images/image2.png" class="friend-image" alt="Photo 1">
            </div>
            <div class="photo">
                <img src="/public/images/image5.png" class="friend-image" alt="Photo 2">
            </div>
            <div class="photo">
                <img src="/public/images/image4.png" class="friend-image" alt="Photo 3">
            </div>
            <div class="photo">
                <img src="/public/images/image2.png" class="friend-image" alt="Photo 4">
            </div>
            <div class="photo">
                <img src="/public/images/image3.png" class="friend-image" alt="Photo 5">
            </div>
        </div>
        <div class="number-friend">
            <span class="number">4</span>
            <span>amis en communs</span>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>
.bloc2 {
    border-radius: 10px;
    background: #303030;
    box-shadow: 0px 4px 54px 50px rgba(0, 0, 0, 0.25);
    width: 295px;
    height: 98px;
    margin: 30px auto 33px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.image-user-commun {
    display: flex;
}

.photo {
    display: inline-block;
    width: 25px;
    margin: -3px;
}

img {
    width: 100%;
    height: 30px;
    display: block;
    object-fit: cover;
    border-radius: 100%;
}

.number-friend {
    margin-left: 10px;
    color: white;
}

.number-friend .number {
    margin-right: 5px;
}
</style>  