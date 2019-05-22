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
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}
/*
document.addEventListener("DOMContentLoaded", function() {
    let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    let active = false;
  
    const lazyLoad = function() {
      if (active === false) {
        active = true;
  
        setTimeout(function() {
          lazyImages.forEach(function(lazyImage) {
            if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                lazyImage.src = lazyImage.dataset.src;
                //lazyImage.srcset = lazyImage.dataset.srcset;
                lazyImage.classList.remove("lazy");

                id = lazyImage.id;
                resizeImg($("#ref"+id), $("#img"+id));

                lazyImages = lazyImages.filter(function(image) {
                    return image !== lazyImage;
                });
  
                if (lazyImages.length === 0) {
                    document.removeEventListener("scroll", lazyLoad);
                    window.removeEventListener("resize", lazyLoad);
                    window.removeEventListener("orientationchange", lazyLoad);
                }
            }
          });
  
          active = false;
        }, 200);

      }
    };
  
    document.addEventListener("scroll", lazyLoad);
    window.addEventListener("resize", lazyLoad);
    window.addEventListener("orientationchange", lazyLoad);
  });
*/  

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