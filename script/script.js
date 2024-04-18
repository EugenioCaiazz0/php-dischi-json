const {createApp} = Vue;

createApp ({
    
    data() {
        return {
            apiUrl: 'server.php',
            list: [],
            newDisk: {
                title: '',
                author: '',
                year: '',
                poster: '',
                genre: ''
            }
        }
    },
    
    methods: {
        getApi(){
            axios.get(this.apiUrl) /* richiamo l'api per riceverne dati tramite axios */
            .then( result => {
                console.log(result.data); /* stampo in console il risultato */
                this.list = result.data;
            })
        },
        addDisk() { /* invio dati al server e poi aggiorno la lista */
            const data = new FormData(); /*passo i dati come se fosse un form, ma non lo è */
            data.append(`newDiskTitle`), this.newDisk.title;
            data.append(`newDiskAuthor`), this.newDisk.author;
            data.append(`newDiskYear`), this.newDisk.year;
            data.append(`newDiskPoster`), this.newDisk.poster;
            data.append(`newDiskGenre`), this.newDisk.genre;
        }  
    },

    mounted() {
        this.getApi(); /* richiamo il metodo all'avvio dell'app */
    }

}).mount('#app')