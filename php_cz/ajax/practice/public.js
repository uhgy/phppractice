(function() {

	var $ = function(id) {
		return document.getElementById(id);
	};

		// 返回对应的Ajax对象
	$.init = function() {
		try {
			return new XMLHttpRequest();
		} catch (e) {
		}
		try {
			return new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e) {
		}
	};

	$.get = function(url, data, callback, type) {
		var xhr = $.init();
		url = url + '?_=' +new Date().getTime();
		if (data != null) {
			url = url + '&' + data;
		}
		xhr.open('get', url);

		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (type == null || type == 'text') {
					type = 'text';
					callback(xhr.responseText);
				}
				if (type == 'xml') {
					callback(xhr.responseXML);
				}
				if (type == 'json') {
					callback('(' + xhr.responseText + ')');
				}
			}
		};
		xhr.send(null);
	};

	$.post = function(url, data, callback, type) {
		var xhr = $.init();
		xhr.open('post', url);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				// if (type == null || type == 'text') {
				// 	type = 'text';
				// 	callback(xhr.responseText);
				// }
				// if (type == 'xml') {
				// 	callback(xhr.responseXML);
				// }
				if (type == 'json') {
					callback(eval('(' + xhr.responseText + ')'));
				}
			}
		};
		xhr.send(data);
	};

	window.$ = $;
})();