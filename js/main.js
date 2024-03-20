const { createApp } = Vue;

createApp({
    data() {
        return {
            discList: [],
        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            this.discList = res.data;
        });

    }
}).mount('#app');