<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Vue -->
    <script src="<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>" 
    <!-- Axios -->
    <script src="<script src="https://unpkg.com/axios/dist/axios.min.js"></script>"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">

    <title>PHP-dischi-json</title>
</head>

<body>
    
<div id="app">

        <div v-for="(item, index) in list"
        :key="item.index"
        class="card d-flex w-50 my-5 mx-auto border-primary ">
            <div class="card-body">
            <h5 class="card-title"> <?php echo $list['title'] ?> </h5>
            <img :src="item.poster" class="card-img-top" :alt="item.title">
            <p class="card-text"> {{item.author}} </p>
            <p class="card-text"> {{item.year}} </p>
            <p class="card-text"> {{item.genre}} </p>
        </div>

        <div class="input-group my-3">
            <input class="form-control"
            v-model.trim="newDisk.title"
            placeholder="New disk"
            type="text" >
            <input class="form-control"
            v-model.trim="newDisk.author"
            placeholder="New disk"
            type="text" >
            <input class="form-control"
            v-model.trim="newDisk.year"
            placeholder="New disk"
            type="text" >
            <input class="form-control"
            v-model.trim="newDisk.poster"
            placeholder="New disk"
            type="text" >
            <input class="form-control"
            v-model.trim="newDisk.genre"
            placeholder="New disk"
            type="text" >
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary"
            @click.stop="addDisk"
            > Aggiungi disco </button></div>
        
</div>

<script type="module" src="script/script.js"></script>

</body>

</html>



    