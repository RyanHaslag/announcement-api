import Vuex from 'vuex';

const apiUrl = '/api/announcements'; // Update this URL to match your backend API endpoint

export default new Vuex.Store({
    state: {
        announcements: [],
        displayedAnnouncements: [],
        currentPage: 1,
        pageSize: 4,
        total: 0
    },
    mutations: {
        setAnnouncements(state, announcements) {
            state.displayedAnnouncements = announcements
        },
        setAnnouncementCount(state, total) {
            console.log(total);
            state.total = total
        },
        setCurrentPage(state, page) {
            state.currentPage = page;
        },
    },
    actions: {
        async fetchAnnouncements({commit, state}) {
            try {
                const response = await axios.get(apiUrl + '/load', {
                    params: {
                        page: state.currentPage,
                        perPage: state.pageSize,
                    },
                });
                const { total, announcements } = response.data;
                commit('setAnnouncementCount', total);
                commit('setAnnouncements', announcements);
            } catch (error) {
                console.error('Error fetching announcements:', error);
            }
        },
        async setPage({commit, dispatch}, page) {
            commit('setCurrentPage', page);
            // Fetch the announcements based on the current page
            await dispatch('fetchAnnouncements');
        },
    },
    getters: {
        getTotalPages: state => Math.ceil(state.total / state.pageSize),
    },
});
