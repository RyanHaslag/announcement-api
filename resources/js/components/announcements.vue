<script setup>
import announcement from './announcement.vue'
</script>

<template>
    <announcement v-for="announcement in displayedAnnouncements" :key="announcement.id">
        <template #heading>{{ announcement.title }}</template>
        <template #author>by {{ announcement.author }} on {{ announcement.date }}</template>
        <template #body>
            <div v-html="announcement.body"></div>
        </template>
    </announcement>

    <!-- Pagination controls -->
    <div class="flex justify-center mt-8 space-x-4">
        <button @click="setPage(currentPage - 1)" :disabled="currentPage === 1" class="w-[100px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none disabled:bg-gray-400 disabled:cursor-not-allowed">Previous</button>
        <span class="text-lg">{{ currentPage }} of {{ getTotalPages }}</span>
        <button @click="setPage(currentPage + 1)" :disabled="currentPage === getTotalPages" class="w-[100px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none disabled:bg-gray-400 disabled:cursor-not-allowed">Next</button>
    </div>
</template>

<script>
import { mapState, mapActions, mapGetters } from 'vuex';
export default {
    computed: {
        ...mapState(['displayedAnnouncements', 'currentPage', 'pageSize']),
        ...mapGetters(['getTotalPages']),
    },
    methods: {
        ...mapActions(['fetchAnnouncements', 'setPage']),
    },
    created() {
        //Get the announcements from the store
        this.$store.dispatch('fetchAnnouncements');
    }
};
</script>
