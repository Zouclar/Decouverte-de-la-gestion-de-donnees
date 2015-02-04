// $(function() {
// function get_activities()
// {
	var token="2ff76604c4caebff9399c301baea45604669da5fcbb32049cd6e772177471762";
	var url="https://api.paris.fr/api/data/1.4/QueFaire/get_activities/?token="+token;
	$.ajax({
		url: url,
		type: "GET",
		data: {'cid':"20",'tag':"1",'created':"0",'start':0,'end':0,'offset':0,'limit':4},
success:function(data)
{
console.log(data	);
	for (i=0; i <= 3; i++)
	{
		// console.log(data.data[i].nom);
		$("#celibataire").append("<p>"+data.data[i].nom+"</p>");
		$("#cpl-couple").append("<p>"+data.data[i].discipline+"</p>");
	}
}
});

// };	
// });