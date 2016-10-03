$(document).ready(function(){
  adding();
  substracting();
  color_change();
  disappearing();
  multiply_add();
  swap_fade();
  label_s_action();
  label_m_action();
  label_l_action();
  alter_menu();
  search_number();
} );
function adding() {
  $("#add_button").click(function(){
    
var inp=parseInt($( "#input_amount" ).val( ))+1;
    
  $( "#input_amount" ).val( inp); // Set the value of a form input.
})};


function substracting()
{
    $("#sub_button").click(function(){
  if( $( "#input_amount" ).val()!="1")
  $( "#input_amount" ).val(parseInt($( "#input_amount" ).val( ),10)-1 ); // Set the value of a form input.
})};

function color_change(){
  $("#change_h").click(function(e){
    e.preventDefault();
  var h1=$("#change_h1");
  
  if(h1.hasClass("coloring"))
    h1.removeClass("coloring");
  else
      h1.addClass("coloring"); 
  
})};

function disappearing(){
$( ".nav_pic" ).click(function() { 
   $(this).hide();
})};
function multiply_add()
{
  $("#add_to_cart_but").click(function(){
 
    //var txt1 = "<b>I </b>";     
    //var div=$("#add_to_cart_but");
   // var txt2 = $("<i></i>").text("love ");     // Create with jQuery
    
    var clon= $( "#add_to_cart_but" ).clone();
    
    clon.appendTo( $(this).parent() );
   // clon.click(function(){
    //  multiply_add();
    })

    
    //$("#add_to_cart_but").prepend($(this));
  })};
function swap_image()
{
  $(".little_image").click(function(){
                        console.log("aa");  
    $(".big_image").attr('src',$(this).attr('src'));
    //$(this).clone().appendTo($(".big_image"));
})};

function swap_fade()
{
  $(".little_image").click(function(){
                   var $this=$(this)  ;
    $(".big_image").fadeOut(function(){
    $(".big_image").fadeIn(400);
    $(".big_image").attr('src',$this.attr('src'));
    })
})};
function label_s_action()
{
  $("#label_s").click(function(){
    
    var cart=$(".add_to_cart");
    
    if(cart.hasClass("hiding"))
    cart.removeClass("hiding");
  else
      cart.addClass("hiding"); 
  
  })
}
function label_m_action()
{
  $("#label_m").click(function(){
    
    var cart=$(".menu_nav");
    
    if(cart.hasClass("coloring"))
    cart.removeClass("coloring");
  else
      cart.addClass("coloring"); 
  
  })
}
function label_l_action(){
  $("#label_l").click(function(){
    var list=$(".description_product p");
    var elem;
    console.log(list.length);
    for(var i =0;i<list.length;i+=2)
{
  elem=$(list.get(i));
  console.log(elem);
  
  if(elem.hasClass("italicing"))
    elem.removeClass("italicing");
  else
elem.addClass("italicing"); 
  
}
  })
};


function alter_menu(){
$(".navbar_nav ul li").click(function(){
  
    var $this = $(this);
    $this.insertBefore($this.siblings(':eq(0)'));
})
};
function search_number(){
  
    $('.search_input input').keydown(function(event){ 
    var keyCode = (event.keyCode ? event.keyCode : event.which);   
    if (keyCode == 13) {
  var s_inp=parseInt($('.search_input input').val( ));  
      console.log(inp);
      if(s_inp>0)
        {
          var inp=parseInt($( "#input_amount" ).val( ))+s_inp;
          $( "#input_amount" ).val( inp); 
        }
    }
});

}
