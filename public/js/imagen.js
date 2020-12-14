
var count = 1
function Click () {
    let tigre = document.getElementById('tigre')

    count = count + 1

    if(count % 2 ){

        tigre.classList.remove('aparecertigre');
        tigre.classList.add('desaparecertigre');

    }else{

        tigre.classList.remove('desaparecertigre');
        tigre.classList.add('aparecertigre');
    }

}

//carousel
$('.carousel').carousel({
    interval: 2000
  })
