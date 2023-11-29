<template>
    <div class="user-profil">

        <div class="image-user"><img src="/public/images/user.png" alt="image-user"></div>
        <p class="user-name">Grafikart</p>
        <div class="pseudo">
            <span class="pseudo-name">#Kratos92</span>
            <img src="/public/images/copier.svg" alt="" class="copier">
        </div>
    </div>
</template>

<script>

</script>

<style scoped>

.image-user{
    width: 100px;
    margin: 10px auto 0;
}

.image-user img {
    max-width: 100%;
}

.user-name{
    color: white;
   text-align: center;
   margin-bottom: 5px;
}

.pseudo{
    margin:  auto;
    display: flex;
    justify-content: space-between;
    width: 90px;
}

.pseudo-name{
    color: white;
}

</style>  