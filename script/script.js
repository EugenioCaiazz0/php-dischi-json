const {createApp} = Vue;

createApp ({
    
    data() {
        return {
            apiUrl: `server.php`,
            list: [],
        }
    },
    
    methods: {
        getApi(){
            axios.get(this.apiUrl) /* richiamo l'api per riceverne dati tramite axios */
            .then( result => {
                console.log(result.data); /* stampo in console il risultato */
                this.list = result.data;
            })
        }  
    },

    mounted() {
        this.getApi(); /* richiamo il metodo all'avvio dell'app */
    }

}).mount(`#app`)