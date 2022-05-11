//import { default as axios } from "axios";


document.addEventListener('DOMContentLoaded', function() {
    let form_modal = document.getElementById("form_modal");
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",
    displayEventTime:false,

    headerToolbar:{
        left: 'prev,next,today',
        right: 'title'
    },
    events: "blogs/showevents",
    dateClick:function(info){
        form_modal.reset();
        form_modal.start.value=info.dateStr;
        form_modal.end.value=info.dateStr;
        $("#event").modal("show");
    },
    eventClick:function (info){
        var eventCalendar=info.event;
        axios.post("blogs/editevents/"+info.event.id).then((res)=>{
            form_modal.id.value=res.data.id;
            form_modal.title.value=res.data.title;
            form_modal.descripcion.value=res.data.descripcion;
            form_modal.start.value=res.data.start;
            form_modal.end.value=res.data.end;
            $("#event").modal("show");
        }).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data_form);
                }
            }
        )
    }
  });
  calendar.render();
  document.getElementById("btnsave").addEventListener("click", function(){
      sendData("blogs/submit");
  });

  document.getElementById("btndelete").addEventListener("click", function(){
      sendData("blogs/delete/"+form_modal.id.value);
  }); 

  document.getElementById("btnedit").addEventListener("click", function(){
    sendData("blogs/update/"+form_modal.id.value);
}); 

  function sendData(url){
    const data_form=new FormData(form_modal);
    axios.post(url, data_form).then((res)=>
    {
        calendar.refetchEvents();
        $("#event").modal("hide");
}).catch(
    error=>{
        if(error.response){
            console.log(error.response.data_form);
        }
    }
)
  }
});
