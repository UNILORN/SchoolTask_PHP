window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
var recognition = new webkitSpeechRecognition();
recognition.lang = 'ja';

// 録音終了時トリガー
recognition.addEventListener('result', function(event){
    var text = event.results.item(0).item(0).transcript;
    $(".recordmonitor").fadeIn();
    $(".record_text").val(text);
}, false);

function fadefade(){
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
