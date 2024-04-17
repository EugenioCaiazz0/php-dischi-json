const {createApp} = Vue;

createApp ({
    
    data() {
        return {
            title: `dischi`,
            apiUrl: `server.php`
        }
    },
    
    methods: {
        getApi(){
            axios.get(this.apiUrl) /* richiamo l'api per riceverne dati tramite axios */
            .then( result => {
                console.log(result.data); /* stampo in console il risultato */
            })
        }  
    },

    mounted() {
        this.getApi(); /* richiamo il metodo all'avvio dell'app */
    }

}).mount(`#app`)