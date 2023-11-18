
const mobileNavShow = document.querySelector(".mobile-nav-show");
const mobileNavHide = document.querySelector(".mobile-nav-hide");

document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
  el.addEventListener("click", function (event) {
    event.preventDefault();
    mobileNavToogle();
  });
});

function mobileNavToogle() {
  document.querySelector("body").classList.toggle("mobile-nav-active");
  mobileNavShow.classList.toggle("d-none");
  mobileNavHide.classList.toggle("d-none");
}

/**
 * Hide mobile nav on same-page/hash links
 */
document.querySelectorAll("#navbar a").forEach((navbarlink) => {
  if (!navbarlink.hash) return;

  let section = document.querySelector(navbarlink.hash);
  if (!section) return;

  navbarlink.addEventListener("click", () => {
    if (document.querySelector(".mobile-nav-active")) {
      mobileNavToogle();
    }
  });
});


/**
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 * !!! Product section -----------------------------------------------------------------------------
 **/

var snapshotGalleryDetailsContainerHeight = 700;
var snapshotGalleryThumbnailContainerHeight = 400;

$(window).on('load', function ()
{
    snapshotGallery();
    var curPicPos = 0;
    var maxHeight = snapshotGalleryDetailsContainerHeight + snapshotGalleryThumbnailContainerHeight;

    if(Foundation.MediaQuery.is('small only')) {
        $('.snapshot-gallery .image-cell').addClass('is-mobile');
        $('.snapshot-gallery .image-cell .detail-container').addClass('dc-mobile');
        $('.snapshot-gallery .image-cell .detail-container.dc-mobile').each(function(){
            setData($(this),'height',$(this).height());
        });
        resetHeights();
    }

    // Gallery details view by click
    $('.snapshot-gallery .image-cell').find('.open-details').click(function(e)
    {
        var imageCell = $(this).parent().parent(),
            thumbnailContainer = $(this).parent(),
            detailContainer = imageCell.find('.detail-container');

        resetHeights();
        // image cell
        if(imageCell.hasClass('is-mobile'))
        {
            imageCell.toggleClass('open').animate({height:(snapshotGalleryThumbnailContainerHeight + detailContainer.data('height')) + 'px'}, 'fast');
        }
        else
        {
            imageCell.toggleClass('open').animate({height:maxHeight + 'px'}, 'fast');
        }
        // detail container
        if(imageCell.hasClass('open') && detailContainer.hasClass('dc-mobile'))
        {
            detailContainer.animate({height:detailContainer.data('height') + 'px'}, 'fast');
        }
        else if(imageCell.hasClass('open'))
        {
            detailContainer.animate({height:snapshotGalleryDetailsContainerHeight + 'px'}, 'fast');
        }

        scrollTo(thumbnailContainer);
        e.stopPropagation();
    });

    // Gallery show next details by click
    $(".snapshot-gallery .image-cell").find(".show-next").click(function(e)
    {
        resetHeights();
        var nextPic = $(this).parent().parent().parent().parent().next();
        nextPic.addClass("open").animate({height:maxHeight + 'px'}, 'fast');
        nextPic.find('.detail-container').animate({height:snapshotGalleryDetailsContainerHeight + 'px'}, 'fast');
        scrollTo(nextPic);
        e.stopPropagation();
        return false;
    });

    // Gallery show previous details by click
    $(".snapshot-gallery .image-cell").find(".show-prev").click(function(e)
    {
        resetHeights();
        var prevPic = $(this).parent().parent().parent().parent().prev();
        prevPic.addClass("open").animate({height:maxHeight + 'px'}, 'fast');
        prevPic.find('.detail-container').animate({height:snapshotGalleryDetailsContainerHeight + 'px'}, 'fast');
        scrollTo(prevPic);
        e.stopPropagation();
        return false;
    });

    // Gallery close
    $('.close-details').click(function()
    {
        $('.snapshot-gallery .image-cell').removeClass('open').animate({height:snapshotGalleryThumbnailContainerHeight}, 'fast');
        $('.detail-container').animate({height:'0px'}, 'fast');
        return false;
    });

});

// Set heights on default size
function resetHeights()
{
    $('.snapshot-gallery .image-cell:not(is-mobile)').removeClass('open').animate({height:snapshotGalleryThumbnailContainerHeight},300);
    $('.detail-container:not(.dc-mobile)').animate({height:'0px'},300);

    $('.snapshot-gallery .image-cell.is-mobile').animate({height: snapshotGalleryThumbnailContainerHeight + 'px'},300);
    $('.snapshot-gallery .image-cell .detail-container.dc-mobile').animate({height:'0px'},300);
}

// Resize images by changing container width
function snapshotGallery()
{
    $('.snapshot-gallery .thumbnail-container').each(function()
    {
        var thumbImage = $(this).closest('.image-cell').find('.thumbnail-image'),
            boxWidth = 400 //thumbImage.width(),
            boxHeight = snapshotGalleryThumbnailContainerHeight;
        (boxWidth > boxHeight) ? $(this).parent().attr('style', 'width:' + parseInt(boxWidth * 200 / boxHeight) + 'px'): $(this).parent().attr('style', 'width:' + parseInt(250 / boxHeight * boxWidth) + 'px');
        $(this).attr('data-pos', parseInt($(this).offset().top) - 65);
        thumbImage.remove();
    });
}

var home = document.getElementById("home");
var about = document.getElementById("about");
var produk = document.getElementById("product");
var kontak = document.getElementById("contact");

about.addEventListener("click", function () {
  if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  }
  about.classList.toggle("active");
});

home.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  }
  home.classList.toggle("active");
});

produk.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  }
  produk.classList.toggle("active");
});
kontak.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  }
  kontak.classList.toggle("active");
});

//!!!----------------------------------------



/**
 * Carousel script
 */
var slideshowDuration = 5000;
var slider=$('.main-content .slider');

function slideshowSwitch(slider,index,auto){
  if(slider.data('wait')) return;

  var slides = slider.find('.slide');
  var pages = slider.find('.pagination');
  var activeSlide = slides.filter('.is-active');
  var activeSlideImage = activeSlide.find('.image-container');
  var newSlide = slides.eq(index);
  var newSlideImage = newSlide.find('.image-container');
  var newSlideContent = newSlide.find('.slide-content');
  var newSlideElements=newSlide.find('.caption > *');
  if(newSlide.is(activeSlide))return;

  newSlide.addClass('is-new');
  var timeout=slider.data('timeout');
  clearTimeout(timeout);
  slider.data('wait',true);
  var transition=slider.attr('data-transition');
  if(transition=='fade'){
    newSlide.css({
      display:'block',
      zIndex:2
    });
    newSlideImage.css({
      opacity:0
    });

    TweenMax.to(newSlideImage,1,{
      alpha:1,
      onComplete:function(){
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({display:'',zIndex:''});
        newSlideImage.css({opacity:''});
        slider.find('.pagination').trigger('check');
        slider.data('wait',false);
        if(auto){
          timeout=setTimeout(function(){
            slideshowNext(slider,false,true);
          },slideshowDuration);
          slider.data('timeout',timeout);}}});
  } else {
    if(newSlide.index()>activeSlide.index()){
      var newSlideRight=0;
      var newSlideLeft='auto';
      var newSlideImageRight=-slider.width()/8;
      var newSlideImageLeft='auto';
      var newSlideImageToRight=0;
      var newSlideImageToLeft='auto';
      var newSlideContentLeft='auto';
      var newSlideContentRight=0;
      var activeSlideImageLeft=-slider.width()/4;
    } else {
      var newSlideRight='';
      var newSlideLeft=0;
      var newSlideImageRight='auto';
      var newSlideImageLeft=-slider.width()/8;
      var newSlideImageToRight='';
      var newSlideImageToLeft=0;
      var newSlideContentLeft=0;
      var newSlideContentRight='auto';
      var activeSlideImageLeft=slider.width()/4;
    }

    newSlide.css({
      display:'block',
      width:0,
      right:newSlideRight,
      left:newSlideLeft
      ,zIndex:2
    });

    newSlideImage.css({
      width:slider.width(),
      right:newSlideImageRight,
      left:newSlideImageLeft
    });

    newSlideContent.css({
      width:slider.width(),
      left:newSlideContentLeft,
      right:newSlideContentRight
    });

    activeSlideImage.css({
      left:0
    });

    TweenMax.set(newSlideElements,{y:20,force3D:true});
    TweenMax.to(activeSlideImage,1,{
      left:activeSlideImageLeft,
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlide,1,{
      width:slider.width(),
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlideImage,1,{
      right:newSlideImageToRight,
      left:newSlideImageToLeft,
      ease:Power3.easeInOut
    });

    TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){
      newSlide.addClass('is-active').removeClass('is-new');
      activeSlide.removeClass('is-active');
      newSlide.css({
        display:'',
        width:'',
        left:'',
        zIndex:''
      });

      newSlideImage.css({
        width:'',
        right:'',
        left:''
      });

      newSlideContent.css({
        width:'',
        left:''
      });

      newSlideElements.css({
        opacity:'',
        transform:''
      });

      activeSlideImage.css({
        left:''
      });

      slider.find('.pagination').trigger('check');
      slider.data('wait',false);
      if(auto){
        timeout=setTimeout(function(){
          slideshowNext(slider,false,true);
        },slideshowDuration);
        slider.data('timeout',timeout);
      }
    });
  }
}

function slideshowNext(slider,previous,auto){
  var slides=slider.find('.slide');
  var activeSlide=slides.filter('.is-active');
  var newSlide=null;
  if(previous){
    newSlide=activeSlide.prev('.slide');
    if(newSlide.length === 0) {
      newSlide=slides.last();
    }
  } else {
    newSlide=activeSlide.next('.slide');
    if(newSlide.length==0)
      newSlide=slides.filter('.slide').first();
  }

  slideshowSwitch(slider,newSlide.index(),auto);
}

function homeSlideshowParallax(){
  var scrollTop=$(window).scrollTop();
  if(scrollTop>windowHeight) return;
  var inner=slider.find('.slider-inner');
  var newHeight=windowHeight-(scrollTop/2);
  var newTop=scrollTop*0.8;

  inner.css({
    transform:'translateY('+newTop+'px)',height:newHeight
  });
}

$(document).ready(function apcgs () {
 $('.slide').addClass('is-loaded');

 $('.slider .arrow').on('click',function(){
  slideshowNext($(this).closest('.slider'),$(this).hasClass('prev'));
});

 $('.slider .pagination .item').on('click',function(){
  slideshowSwitch($(this).closest('.slider'),$(this).index()-1);
});


 $('.slider .pagination').on('check',function(){
  var slider=$(this).closest('.slider');
  var pages=$(this).find('.item');
  var index=slider.find('.slides .is-active').index();
  pages.removeClass('is-active');
  pages.eq(index).addClass('is-active');
});

var timeout=setTimeout(function(){
  slideshowNext(slider,false,true);
},slideshowDuration);

slider.data('timeout',timeout);
setTimeout(apcgs, slideshowDuration);
});

if($('.main-content .slider').length > 1) {
  $(window).on('scroll',homeSlideshowParallax);
}










$('#carousel-1').carousel({
  interval: 1,
  wrap: true,
  keyboard: true
});

$('#carousel-2').carousel({
  interval: 1,
  wrap: true,
  keyboard: true
});
