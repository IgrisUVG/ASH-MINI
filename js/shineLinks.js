function shineLinks(class){
	try{
		var el=document.getElementById(class).getElementsByTagName('a');
		var url=document.location.href;
			for(var i=0;i<el.length; i++){
				if (url==el[i].href){
				el[i].className += ' act';
			};
		};
	}catch(e){}
};