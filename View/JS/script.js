function resizeImg(ref, img){
    ref.css("padding-top", "0px");
    img.css("height","auto");
    img.css("width","auto");
    if(img.height() < img.width()){
        img.css("width","100%");
        ref.css("padding-top",((ref.height()/2)-(img.height()/2))+"px");
    }else img.css("height","100%");
}

resizeImg($(".ref1"), $(".img1"));