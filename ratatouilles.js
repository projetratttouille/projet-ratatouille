function changeImage(ville){
    document.getElementById('ratatouille').style.transform = "scale(1,1)";
    document.getElementById('laloupe').style.transform = "scale(1,1)";
    document.getElementById('lyon').style.transform = "scale(1,1)";
    document.getElementById('bordeaux').style.transform = "scale(1,1)";

    document.getElementById('imagesRestos').style.backgroundImage = "url('images/"+ville+".jpg')";
    if(ville == 'ratatouille'){
        document.getElementById('textVille').innerHTML = 'RATATOUILLE';
        document.getElementById('textRestos').innerHTML = 'La franchise ratatouille vous présente ses restaurants. Dans un esprits d’authenticité et de savoir faire traditionnelle, les différents restaurants vous proposent de savoureux plats réalisé à partir de produits locaux et de grandes qualités. Les restaurants ratatouille vous accueille du lundi au dimanche dans un cadre chaleureux et conviviale.';
    }
    if(ville == 'laloupe'){
        document.getElementById('textVille').innerHTML = 'TOULOUSE';
        document.getElementById('textRestos').innerHTML = 'Le restaurant ratatouille de Toulouse blablabla...';
    }
    if(ville == 'lyon'){
        document.getElementById('textVille').innerHTML = 'LYON';
        document.getElementById('textRestos').innerHTML = 'Le restaurant ratatouille de Lyon blablabla...';
    }
    if(ville == 'bordeaux'){
        document.getElementById('textVille').innerHTML = 'BORDEAUX';
        document.getElementById('textRestos').innerHTML = 'Le restaurant ratatouille de Bordeaux blablabla...';
    }
    document.getElementById(ville).style.transform = "scale(1.2,1.2)";
}