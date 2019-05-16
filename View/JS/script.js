function resizeImg(ref, img){
    img.css("height","auto");
    img.css("width","auto");
    if(img.height() == img.width()){
        img.css("width","100%");
        img.css("height","100%");
    }else if(img.height() < img.width()){
        img.css("width","100%");
        ref.css("padding-top",((ref.height()/2)-(img.height()/2))+"px");
    }else{
        img.css("height","100%");
        ref.css("padding-left",((ref.width()/2)-(img.width()/2))+"px");
    }
}
redimensionar();
redimensionar1();
carregarGaleria();

$(window).scroll(function(){
    //carregarGaleria();
})

$(window).resize(function(){
    redimensionar();
    redimensionar1();
});

function redimensionar(){
    $(".div-img").height($(".div-img").width());

    var childDivs = $(".img-container").children();

    for( i=0; i< childDivs.length; i++ )
    {
        resizeImg($("#ref"+i), $("#img"+i));
    }
}

function redimensionar1(){
    $(".div-img").height($(".div-img").width());

    var childDivs = $(".img-container1").children();

    for(i=0; i< childDivs.length; i++ )
    {
        resizeImg($(".ref"+i), $(".img"+i));
    }
}


function carregarGaleria(){
    var childDivs = $(".img-container1").children();
    for(i=0; i< childDivs.length; i++ ){
        imagem = $(".img"+i);
        //console.log(imagem);
        console.log(isElementInViewport(imagem));
        id = imagem.attr('id');
        //console.log('buscar_imagem'+id);
        console.log(imagem.attr('src'))
        if(isElementInViewport(imagem) == true && imagem.attr('src') == ''){
            $.ajax({
                url:"/buscar_imagem?"+id
            }).done(function(data){
                //console.log(data);
                console.log(JSON.parse(data).caminho)
                src = JSON.parse(data).caminho;
                imagem.attr('src',src)
            })  
        }
    }
}


function isElementInViewport(el) {
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}