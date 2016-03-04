$(document).ready(function(){
    var i =0;
    console.log(jsonPartida);
    console.log(Object.keys(jsonPartida).length);
    
     $("#selpart").change(function() {
        var $this = $(this),
        $value = $this.val();
        var selected = $("#selpart option:selected" ).text();
        console.log($value);
        
        
    });
});



