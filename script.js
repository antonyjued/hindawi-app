function getTime(){
  var date=new Date();
  time=addZero(date.getHours())+'/'+addZero(date.getMinutes());
  var d='23';
  document.cookie="cname="+d; 
}
function hello(){
  var name="Antony";
  alert("Hello "+name); 
}