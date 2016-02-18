var i = 0;
$(document).on("ready", main);

function main(){
	var control = setInterval(cambiarSlider, 6000);
}

function cambiarSlider(){
	i++;
	if(i == $("#slider img").size()){
		i = 0;
	}
	$("#slider img").hide();
	$("#slider img").eq(i).fadeIn(2000);
}