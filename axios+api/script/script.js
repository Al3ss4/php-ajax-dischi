const app = new Vue({
    el: '#app',
    data: {
        url : 'api/api.php',
        albums : '',
      
    },
    methods: {
     
    },
    mounted() {
        axios
            .get(this.url)
            .then(response => {
               
                this.albums = response.data;
               
            })
            .catch(error => {
                console.log(error);
            })

    }
})