// ��һ�������� �������� �� �ڶ��������� ����ִ�еĺ��� �� ����������������ִ�еĲ��� ��
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