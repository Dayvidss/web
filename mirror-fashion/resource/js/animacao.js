var banners = ["resource/img/destaque-home.png", "resource/img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
}

var time = setInterval(trocaBanner, 4000);
var controle = document.querySelector('.pause');

controle.onclick = function () {
    if (controle.className == 'pause') {
        clearInterval(time);
        controle.className = 'play';
    } else {
        time = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
    }

    return false;
};