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

$(window).resize(function(){
    redimensionar();
});

function redimensionar(){
    $(".div-img").height($(".div-img").width());

    var childDivs = $(".img-container").children();

    for( i=0; i< childDivs.length; i++ )
    {
        resizeImg($("#ref"+i), $("#img"+i));
    }
}
