$(document).ready(function(){

    getModels();

	$("#zc-btn-query").click(function() {
		getQuery();
	});
});
	
function getModels() {

	$("#zc-sel-model").append(new Option("Select Model", "<null>"));
	$.ajax({
		url: "/kundu-me/systemcomposer/cloud-model-explorer-main-1/zc/api/get/models/",
		type: 'GET',
		data: "",
		success: function(result) {
		  //called when successful
		  console.log(result);
		  if(result) {
			let models = result;
                        for(var index = 0; index <  models.length; index++) {
                                let model = models[index];
                                $("#zc-sel-model").append(new Option(model, model));
                        };

		  }
		},
		error: function(e) {
		  //called when there is an error
		  console.log(e);

		}
	});
}

function getQuery() {
	
	let name = $("#zc-sel-model").val();
	let type = $("#zc-sel-type").val();

	$("#zc-label-query-model-name").text(name);
	$("#zc-label-query-type").text(type);

	$.ajax({
		url: "/kundu-me/systemcomposer/cloud-model-explorer-main-1/zc/api/get/model/",
		type: 'GET',
		data: "name=" + name + "&type=" + type,
		success: function(result) {
		  console.log(result);
		  //called when successful
		  if(result) {
			var queryResult = result;
			$("#zc-textarea-result").val(queryResult);

			$('#zc-table-result > thead').empty();
			$('#zc-table-result > tbody').empty();

			  /*
			let isHeader = false;
			let headerKey = [];
			queryResult.forEach(function(row) {

			  if(!isHeader) {
				isHeader = true;
				let thead = $("#zc-table-result > thead");
				let theadRow = "<tr>";
				for(let key in row) {
				  theadRow += "<th>" + key + "</th>";
				  headerKey.push(key);
				}
				thead.append(theadRow);
			  }

			  let tbody = $("#zc-table-result > tbody");
			  let tbodyRow = "<tr>";
			  headerKey.forEach(function(key) {
				tbodyRow += "<td>" + row[key] + "</td>";
			  });
			  tbodyRow += "</tr>";
			  tbody.append(tbodyRow);
			});*/
		  }
		},
		error: function(e) {
		  //called when there is an error
		  console.log(e);
		}
	});
}
