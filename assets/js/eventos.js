document.addEventListener('DOMContentLoaded', function () {
    // Obtén todos los elementos con la clase 'img-containerPd'
    var imgSelects = document.querySelectorAll('.img-containerPd');
    // Itera sobre cada elemento y agrega el evento de clic
    imgSelects.forEach(function (imgSelect) {
        imgSelect.addEventListener('click', function () {
            var img = imgSelect.querySelector('.img-containerPd img');
            let imgSrc = img.src
            console.log(img.src)
            let CurrentImg = document.querySelector('.img-card-pd')
            CurrentImg.src = imgSrc
        });
    });
});
