function resizeImg(ref, img){
    img.css("height","auto");
    img.css("width","auto");
    ref.css("padding-top","0px");
    ref.css("padding-left","0px");
    if(img.height() == img.width()){
        img.css("width","100%");
        img.css("height","100%");
    }else if(img.height() < img.width()){
        img.css("width","100%");
        ref.css("padding-top",((ref.height()/2)-(img.height()/2))+"px");
        ref.css("padding-left","0px");
    }else{
        img.css("height","100%");
        ref.css("padding-left",((ref.width()/2)-(img.width()/2))+"px");
        ref.css("padding-top","0px");
    }
}
redimensionar();
redimensionar1();

$(window).resize(function(){
    redimensionar();
    redimensionar1();
});

function redimensionar(){
    $(".div-img").height($(".div-img").width());

    var childDivs = $(".img-container").children();

    for( i=0; i < childDivs.length; i++ )
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


function isElementInViewport(el) {
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

$('#modal').on('shown.bs.modal', function () {
    $('#meuInput').trigger('focus')
  })

$('.modalTrigger').click(function(){
    console.log($(this).children().children().attr('id'));
    id = $(this).children().children().attr('id');
    setModal(id);
})

function setModal(id){
    $.ajax({
        url: "buscar_imagem?"+id,
        context: document.body
    }).done(function(data) {
        $("#modalImagem").attr('src',JSON.parse(data).caminho)
        $("#legendaImagem").html(JSON.parse(data).legenda)
    });
}

$('.noticialink').click(function(){
    console.log($(this).attr('id'));
    id = $(this).attr('id');
    setNoticia(id)
})

function setNoticia(id){
    $.ajax({
        url: "buscar_noticia?"+id,
        context: document.body
    }).done(function(data) {
        $("#noticia_titulo").html(JSON.parse(data).titulo)
        $("#noticia_data").html(JSON.parse(data).data)
        $("#noticia_conteudo").html(JSON.parse(data).conteudo)
        $("#noticia_membro").html('- '+JSON.parse(data).membro)
    });
}