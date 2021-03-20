
var restrictionList = [];



$(document).ready(function(){

    /********
    // Account Functioality
    *********/
    // Close chip
    $(".closebtn").click(function(){
      var temp = $(this).parent().attr('id');
      this.parentElement.style.display='none';
      this.parent.remove();
      restrictionList = $.grep(restrictionList, function(value){
        return value != temp;
      });
    });

    // Add chip to restrictions
    $("#submitRestriction").click(function(){
      var restriction = $.trim( $('restriction').val() );
      $("#restrictionChips").append(" <div class='chip' id=" + restriction + ">" + restriction + "<span class='closebtn'>&times;</span> </div>");
      restrictionList.push(restriction);
    });

    // Add chip to restrictions
    $("#submitRestrictions").click(function(){

    });


    // Add chip to ingredients
    // Add chip to instructions






});
