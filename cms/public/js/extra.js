setInterval(() => {
   var nowTime = new Date();
   var nowHour = nowTime.getHours();
   var nowMin  = nowTime.getMinutes();
   var nowSec  = nowTime.getSeconds();
   
   if(nowHour < 10){
       nowHour = "0" + nowHour;
   }
   if(nowMin < 10){
       nowMin = "0" + nowMin;
   }
   if(nowSec < 10){
       nowSec = "0" + nowSec;
   }
   var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
   document.getElementById("RealtimeClockArea").innerHTML = msg;
}, 1000);

// function buttonClick(){
// var obj = document.getElementById("workstatus");

//       obj.style.color = '#ffffff';
//       obj.style.backgroundColor = 'red';

// // if(obj=='退勤する'){
// //       obj.style.color = '#ffffff';
// //       obj.style.backgroundColor = 'blue';
// //  }
// }
