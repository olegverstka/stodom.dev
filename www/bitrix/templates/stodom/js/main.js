$(document).ready(function(){$(".bxslider").bxSlider(),jQuery(".foot-menu ul").autocolumnlist({columns:2}),$('input[type="radio"], input[type="checkbox"]').styler(),$("#slider-range-max").slider({range:"max",min:1,max:5,value:1,slide:function(e,l){$("#amount").val(l.value)}}),$("#amount").val($("#slider-range-max").slider("value")),$("#slider-range").slider({range:!0,min:500,max:15e3,values:[500,15e3],slide:function(e,l){$("#amountLeft").html("от "+l.values[0]+" руб."),$("#amountRight").html("от "+l.values[1]+" руб.")}}),$("#amountLeft").html("от "+$("#slider-range").slider("values",0)+" руб."),$("#amountRight").html("от "+$("#slider-range").slider("values",1)+" руб.")});