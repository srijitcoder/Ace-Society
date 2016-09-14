$(document).ready(function(){
    $(".create").click(function(){
        $(".NewNote").show();
        setTimeout(newtab, 800);
    });
}); 

function createNote() {
$(document).ready(function(){
        $(".NewNote").show();
        setTimeout(newtab, 800);
});
}

function newtab(){
$(document).ready(function() {
		$(".NewMain").show();     
});
}

function generate(id_g) {
$(document).ready(function(){
		id_g = id_g;
		$(".EditDupMain").show(); 
        $(".EditDupMain").load('controllers/generate.php', {id: id_g});
		$(".EditNote").show();    
        setTimeout(edittab, 800);
});
}

function edittab(){
$(document).ready(function() {
		    
});
}	

$(document).ready(function(){
	$(".NewClose").click(function(){
		$(".NewNote").hide();
		$(".NewMain").show(); 
	});
});

$(document).ready(function(){
	$(".EditClose").click(function(){
		$(".EditNote").hide();
		$(".EditDupMain").show(); 
	});
});

function saveEdit(Edit_id){
$(document).ready(function(){
		Edit_id = Edit_id;
		var heading = document.getElementById('EditHeading').value;
		var content = document.getElementById('EditContent').value;
		var color = document.getElementById('EditcolorNew').value;
		var catg = document.getElementById('Editcatg').value;
		$(".neutral").load('controllers/saveEdit.php', {id: Edit_id, heading: heading, content: content, color: color, catg: catg});
		$(".EditNote").hide();
		$(".EditDupMain").show();
		setTimeout(first_note, 400);
});
}

function trash(Edit_id){
$(document).ready(function(){
		Edit_id = Edit_id;
		$(".neutral").load('controllers/trash.php', {id: Edit_id});
		$(".EditNote").hide();
		$(".EditDupMain").show();
		setTimeout(first_note, 100);
});
}



function color_filter(number) {
$(document).ready(function(){
		number = number;
		$("#note_landing").load('controllers/note.php', {type:"color", id: id, num: number});
});
}

function type_filter(number) {
$(document).ready(function(){
		number = number;
		$("#note_landing").load('controllers/note.php', {type:"type", id: id, num: number});
});
}

function fav_filter(number) {
$(document).ready(function(){
		number = number;
		$("#note_landing").load('controllers/note.php', {type:"fav", id: id, num: number});
});
}

function first_note() {
$(document).ready(function() {
		$("#note_landing").load('controllers/note.php', {type:"all", id: id, num: 1});     
});	
}


$(document).ready(function(){
	$(".saveNew").click(function(){
		var heading = document.getElementById('NewHeading').value;
		var content = document.getElementById('NewContent').value;
		var color = document.getElementById('colorNew').value;
		var catg = document.getElementById('catg').value;
		$(".neutral").load('controllers/save.php', {id: id, heading: heading, content: content, color: color, catg: catg});
		$(".NewNote").hide();
		$(".NewMain").show();
		setTimeout(first_note, 400);
	});
});

function favedit(id_fav, fav_val) {	
$(document).ready(function() {
			id_fav = id_fav;
			fav_val = fav_val;
			fav_class = "fav-"+id_fav;

			if(fav_val == 1){
				$("."+fav_class).attr("onclick","favedit("+id_fav+", 0)");
				$("."+fav_class).load('controllers/fav.php', {id:id_fav, fav_val: fav_val});     
			}
			else {
				$("."+fav_class).attr("onclick","favedit("+id_fav+", 1)");
				$("."+fav_class).load('controllers/fav.php', {id:id_fav, fav_val: fav_val});     	
			}

});	
}

function power(){
	window.location="controllers/logout.php";
}