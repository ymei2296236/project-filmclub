{{ include('header.php', {title: 'Modifier le film'}) }}

<body>
    <main>
    <a class="bouton bouton--tertiaire" href="{{path}}film/index">< Retourner à la liste de films</a>
        <h1 class="h1-moins-espace">Modifier le film</h1>
        {% if errors is defined %}
        <span class="msg-error">{{ errors | raw }}</span>
        {% endif %}
        <form action="{{path}}film/update" method="post">
            <input type="hidden" name="id" value="{{ film.id }}">
            <label>Titre
                <textarea type="text" name="titre" cols=40 rows=2>{{ film.titre }}</textarea>
            </label>
            <label>Année de production
                <input type="number" name="anneeProduction" value="{{ film.anneeProduction }}"> 
            </label>
            <label>Synopsis
                <textarea name="synopsis" cols=40 rows=10>{{ film.synopsis }}</textarea>
            </label>
            <label>Duree (minutes)
                <input type="number" name="duree" value="{{ film.duree }}">
            </label>
            <label>Genre
                <select name="genre_id">
                    {% for genre in genres %}
                        <option value="{{ genre.id }}" 
                        {% if genre.id == film.genre_id %} 
                        selected 
                        {% endif %} 
                        > 
                        {{ genre.nom }}
                        </option>
                    {% endfor %}
                </select>
            </label>
            <div class="boutons" >
                <input class="bouton" type="submit" value="Enregistrer">
            </div>

        </form>
    </main>
</body>
</html>