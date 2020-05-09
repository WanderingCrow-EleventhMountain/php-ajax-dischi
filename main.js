$(document).ready(function(){

  // Variabili di handlebars
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

  $.ajax({
    url: 'gameslist.php',
    method: 'GET',
    success: function(data){
      var games = data;
      for (var i = 0; i < games.length; i++) {
        var name = games[i].name;
        var author = games[i].author;
        var year = games[i].year;
        var cover = games[i].poster;

        console.log(cover);

        var context = {
          name: name,
          cover: cover,
          author: author,
          year: year
        };
        var html = template(context);
        $("main").append(html).hide().fadeIn(1200);
      }
    },
    error: function(err){
      alert("nope!");
    }
  });
});
