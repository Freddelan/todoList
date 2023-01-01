<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Liste de Tâches</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" /> 
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>

<body>
 <div class="container">
    <div class="image">

    <!-- <img src="image/liste.jpg" alt="image tasse a café" width="100%" height="auto"> </div> -->
    <header>


        <h1>Liste de Tâches</h1>

    </header>
    <form>
        <input type="text" class="todo-input" />
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-square"></i>
        </button>
        <div class="select">
            <select name="todos" class="filter-todo">
                <option value="all">Toutes</option>
                <option value="completed">Complétée</option>
                <option value="uncompleted">À Faire</option>
            </select>
        </div>
    </form>
    <div class="todo-container">
        <ul class="todo-list"></ul>
    </div>
</div> 
    <script src="app.js"></script>

</body>

</html>