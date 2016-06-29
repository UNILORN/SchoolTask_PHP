
$(function(){
  $(".change_button").find("a").click(function(){
    $(this).hide();
    $(this).next(".mdl-textfield").show();
  });
});



window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
var recognition = new webkitSpeechRecognition();
recognition.lang = 'ja';

// 録音終了時トリガー
recognition.addEventListener('result', function(event){
    var text = event.results.item(0).item(0).transcript;
    $(".record_text").val(text);
    if (text=="消して"){
      $(".checklist").submit();
    }
    else if(text =="全部チェックして"){
      var list = $(".checknum").length;
      $(".mdl-checkbox").addClass("is-checked");
      for(var i = 0;i<list;i++){
        var yoso = '[name = "btn['+i+']"]';
        $('[name = "btn['+i+']"]').prop('checked',true);
        clickcheck();
      }
    }
    else if(text =="全部チェック外して"){
      var list = $(".checknum").length;
      $(".mdl-checkbox").removeClass("is-checked");
      for(var i = 0;i<list;i++){
        var yoso = '[name = "btn['+i+']"]';
        $('[name = "btn['+i+']"]').prop('checked',false);
        clickcheck();
      }
    }
    else{
      $(".recordmonitor").fadeIn();
      $(".listname").val(text);
    }
}, false);

function fadefade(){
  var text = $(".record_text").val();
  $(".listname").val(text);
  $(".recordmonitor").fadeOut();
}

// 録音開始
function record()
{
    recognition.start();
}


clickcheck = function(){

  var list = $(".checknum").length;
  var count = 0;
  var qqq = $(".checknum").map(function() {
  return $(this).prop('checked');
}).get();
  qqq.forEach(function(item){
    if(item){count++;}
  });

  $(".progress-list").text(Math.round((count/list)*100)+"%");
  $(".progress-bar").css("width",((count/list)*100)+"%");
  if(((count/list)*100) == 100){
    $(".progress-bar-success").css("background-color","#FF5252");
  }
  else{
    $(".progress-bar-success").css("background-color","#5cb85c");
  };
}
