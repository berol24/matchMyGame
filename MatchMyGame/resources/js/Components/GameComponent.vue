

<!-- Recherche de partenaires de jeu -->
<template>
    <div>
        <select v-model="selectedGame">
            <option value="fortnite">Fortnite</option>
            <option value="valorant">Valorant</option>
            <option value="csgo">CS:GO</option>
        </select>
        <button @click="startSearch">Rechercher</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedGame: 'fortnite',
        };
    },
    methods: {
        startSearch() {
            // Appel API Laravel pour lancer la recherche avec le jeu sélectionné
        },
    },
};
</script>
