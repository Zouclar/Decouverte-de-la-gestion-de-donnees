// $(function() {
// function get_activities()
// {
	var token="2ff76604c4caebff9399c301baea45604669da5fcbb32049cd6e772177471762";
	var url="https://api.paris.fr/api/data/1.4/QueFaire/get_activities/?token="+token;
	var tour = 7;
	$.ajax({
		url: url,
		type: "GET",
		data: {'cid':"20",'tag':"1",'created':"0",'start':0,'end':0,'offset':0,'limit':tour},
success:function(data)
{
	for (i= 0; i <= tour-1 ; i++)
	{
		console.log(data.data[i].small_description);
		$("#celibataire").append("<p>"+(i+1)+":"+data.data[i].nom+" = "+data.data[i].discipline+"\n"+"Description :"+data.data[i].small_description+"</p>");
		}
}
});

// };	
// });