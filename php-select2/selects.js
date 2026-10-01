$("#provincia").load("./selectProvincia.php", function(responseTxt, statusTxt, xhr){
	if(statusTxt == "success") {
		var json = JSON.parse(responseTxt);
		var html = "<option>-</option>";
		$.each(json, function(index, value){
			html+= '<option value="'+value.id+'">'+value.provincia+"</option>";						
		});
		$("#provincia").html(html);
		$('#provincia').select2();
	}
	if(statusTxt == "error") {
		alert("Error: " + xhr.status + ": " + xhr.statusText);
	}
});

$('#provincia').on('change', function() {
	var id = this.value;
	$.post('./selectDepartamento.php', {
			id: id
		},
		function(response, status){			
			if (status == "success") {							
				var json = JSON.parse(response);
				var html = "<option>-</option>";
				$.each(json, function(index, value){
					html+= '<option value="'+value.id+'">'+value.dpto+"</option>";						
				});
				$("#departamento").html(html);
				$('#departamento').select2();
			}
		}
	);
});

$('#departamento').on('change', function() {
	var id = this.value;
	$.post('./selectLocalidad.php', {
			id: id
		},
		function(response, status){			
			if (status == "success") {							
				var json = JSON.parse(response);
				var html = "<option>-</option>";
				$.each(json, function(index, value){
					html+= '<option value="'+value.id+'">'+value.localidad+"</option>";						
				});
				$("#localidad").html(html);
				$('#localidad').select2();
			}
		}
	);
});