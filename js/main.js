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
            console.log(this.discList);
        });

    }
}).mount('#app');