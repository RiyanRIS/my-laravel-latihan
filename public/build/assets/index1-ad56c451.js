var e=document.getElementById("column-basic");if(e!==null){e.innerHTML="";var t={series:[{name:"Online",data:[44,55,57,56,61,58,63,60,66]},{name:"Offline",data:[76,85,101,98,87,105,91,114,94]},{name:"Marketing",data:[35,41,36,26,45,48,52,53,41]}],chart:{type:"bar",height:350},plotOptions:{bar:{horizontal:!1,columnWidth:"55%",endingShape:"rounded"}},grid:{show:!0,borderColor:"rgba(119, 119, 142, 0.1)"},dataLabels:{enabled:!1},colors:["rgb(21, 58, 84)","rgb(0, 165, 162)","rgb(166, 142, 94)"],stroke:{show:!0,width:2,colors:["transparent"]},xaxis:{categories:["Aug","Sep","Oct","Nov","Dec","Jan","Feb","Mar","Apr"],labels:{show:!0,style:{colors:"#8c9097",fontSize:"11px",fontWeight:600,cssClass:"apexcharts-xaxis-label"}},axisBorder:{show:!0,color:"rgba(119, 119, 142, 0.05)",offsetX:0,offsetY:0},axisTicks:{show:!0,borderType:"solid",color:"rgba(119, 119, 142, 0.05)",width:6,offsetX:0,offsetY:0}},yaxis:{title:{text:"",style:{color:"#8c9097"}},labels:{show:!0,style:{colors:"#8c9097",fontSize:"11px",fontWeight:600,cssClass:"apexcharts-xaxis-label"}}},fill:{opacity:1},tooltip:{y:{formatter:function(r){return"$ "+r+" thousands"}}}};document.getElementById("column-basic")&&(document.getElementById("column-basic").innerHTML="");var a=new ApexCharts(document.querySelector("#column-basic"),t);a.render()}var e=document.getElementById("ethCoin");if(e!==null){e.innerHTML="";var t={series:[{data:[34,55,41,47,32,43,31]}],chart:{sparkline:{enabled:!0},dropShadow:{enabled:!0,enabledOnSeries:void 0,top:3,right:6,blur:3,color:["#00a5a2"],opacity:.3},type:"line",height:60,width:80},tooltip:{x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}},colors:["#00a5a2"],stroke:{width:[1.5],curve:["smooth"]},xaxis:{crosshairs:{show:!1}},fill:{type:"gradient",gradient:{opacityFrom:.9,opacityTo:.9,stops:[0,98]}}};document.getElementById("ethCoin")&&(document.getElementById("ethCoin").innerHTML="");var n=new ApexCharts(document.querySelector("#ethCoin"),t);n.render()}var e=document.getElementById("ethCoin1");if(e!==null){e.innerHTML="";var s={series:[{data:[25,39,36,47,32,43,31]}],chart:{sparkline:{enabled:!0},dropShadow:{enabled:!0,enabledOnSeries:void 0,top:3,right:6,blur:3,color:["#db555d"],opacity:.3},type:"line",height:60,width:80},tooltip:{x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}},colors:["#db555d"],stroke:{width:[1.5],curve:["smooth"]},xaxis:{crosshairs:{show:!1}},fill:{type:"gradient",gradient:{opacityFrom:.9,opacityTo:.9,stops:[0,98]}}},i=new ApexCharts(document.querySelector("#ethCoin1"),s);i.render();var t={series:[{name:"Revenue",data:[55,52,55,52,55,55,58,58,53,55,54,55]}],chart:{height:123,type:"area",sparkline:{enabled:!0}},dataLabels:{enabled:!1},stroke:{width:[1.4],show:!0,curve:["smooth"]},xaxis:{crosshairs:{show:!1}},legend:{show:!1},labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],markers:{size:0},colors:["#00a5a2"],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.4,opacityTo:.7,stops:[0,100]}}};document.getElementById("totalRevenue")&&(document.getElementById("totalRevenue").innerHTML="");var l=new ApexCharts(document.querySelector("#totalRevenue"),t);l.render()}var e=document.getElementById("donut-update");if(e!==null){e.innerHTML="";var t={series:[44,55,33,55,33],labels:["Accepted","Rejected","Dispatched","Delivered","Cancelled"],chart:{height:230,type:"donut"},dataLabels:{enabled:!1},responsive:[{breakpoint:480,options:{chart:{width:200},legend:{show:!1}}}],colors:["#00a5a2c9","#17b1dfb0","#f7b725bf","#44b86cbf","#be495fbd"],legend:{show:!0,position:"right",markers:{width:10,height:10}},stroke:{show:!0,width:0,colors:["transparent"]}};document.getElementById("donut-update")&&(document.getElementById("donut-update").innerHTML="");var d=new ApexCharts(document.querySelector("#donut-update"),t);d.render()}
