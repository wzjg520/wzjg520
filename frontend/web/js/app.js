/**
 * @author Jiajun Wang
 */
;
var app = {};

app.ua = {},
app.tool = {};


app.tool.scrollTop = function (){
	$('html,body').animate({
		'scrollTop' : '0px'
	});
};

/**
 * 有序列化后的数据生成post数据
 * @param objArr
 * @return post data
 */
app.tool.getPostData = function (selector) {
	var objArr = $(selector).serializeArray();
	var postData = {};
	$.each(objArr, function(i, field) {
		postData[field.name] = field.value
	})
	return postData;
}
