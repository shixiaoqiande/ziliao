// 第一个参数是 操作对象 ； 第二个参数是 向上执行的函数 ； 第三个参数是向下执行的参数 ；
function mouseWheel(obj,upfn,downfn){
	function addEvent(obj,type,fn){
		if(document.addEventListener){
			obj.addEventListener(type,fn,false);
		}else{
			obj.attachEvent("on"+type,fn);
		}
	}
	addEvent(obj,"mousewheel",wheel);
	addEvent(obj,"DOMMouseScroll",wheel);
	function wheel(e){
		var ev=window.event||e;
		if(ev.preventDefault){
			ev.preventDefault();
		}else{
			ev.returnValue = false;
		}
		if(ev.detail){//firefox
			if(ev.detail>0){
				downfn();
			}else{
				upfn();
			}
		}else{//ie google
			if(ev.wheelDelta>0){
				upfn();
			}else{
				downfn();
			}
		}
	}
}