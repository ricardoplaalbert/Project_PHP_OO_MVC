function translate(lang) {

  lang = lang || localStorage.getItem('app-lang') || 'es';
  localStorage.setItem('app-lang', lang);

  $('#lang'.esp(lang));
  var elems = document.querySelectorAll('[data-tr]');
 if (lang !="en"){
  $.ajax({
  type: 'POST',
  url: 'model/'+lang+'.json',
  dataType: json,
  success: function (data){

  for (var x = 0; x < elems.length; x++) {
   
     elems[x].innerHTML =data["strings"][elems[x].dataset.tr]
  }
}
});

}else {
  for(var x = 0; x < elems.length; x++){
    elems[x].innerHTML = elems[x].dataset.tr;  
  }
}
}

$(document).ready(function(){
  translate();
console.log("ready")
  $("#btn-es"). on("click", function(){
    translate("esp");
  });
  $("#btn-en"). on("click", function(){
    translate("en");
  });
  $("#btn-va"). on("click", function(){
    translate("va");
  });
});
  