/**
 * Created by Snowy on 19.09.2016.
 */

var count;
var active = 0;

var controllForward = $('#slider-small-controll-forward');
var controllBack = $('#slider-small-controll-back');

var elems = $('.slider-small-slide-element');

function showSlide(slide){
    elems.hide();
    elems.slice(slide).show("fast");
    elems.slice(slide+1).hide();
}

$(document).ready(function(){
    count = elems.length;
    showSlide(active);
});

controllBack.click(function(){
    if (active == 0){
        active = count-1;
    }
    else {
        active--;
    }
    showSlide(active);
});

controllForward.click(function(){
    if (active == count-1){
        active = 0;
    }
    else {
        active++;
    }
    showSlide(active);
});