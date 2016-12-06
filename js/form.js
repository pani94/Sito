 function checkForm()
  {
    var falso = 0;
    var array =  ["mail","password","password1","user","nome","cognome","citta"] ;
     var i;
     var text = "*Campo obbligatorio";
      for (i = 0; i < array.length; i++) {

     if(document.getElementById(array[i]).value == "") {

     var a = "err" + array[i];
     var padre = document.getElementById(a);
     var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["borderColor"] = 'red';
        falso++;
        }

     }
      if(falso > 0){
          return false;
      }
      var array1 =  ["mail","password","user","nome","cognome"] ;
    for (i = 0; i < array1.length; i++){
        if(!validate(array1[i])) {
            return false;
        }
    }
      if(!confirm()){
          return false;
      }
  return true;
  }
 function checkFormPass()
  {
    var falso = 0;
    var array =  ["oldpassword","password","password1"] ;
     var i;
     var text = "*Campo obbligatorio";
      for (i = 0; i < array.length; i++) {

     if(document.getElementById(array[i]).value == "") {

     var a = "err" + array[i];
     var padre = document.getElementById(a);
     var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["borderColor"] = 'red';
        falso++;
        }

     }
      if(falso > 0){
          return false;
      }


        if(!validate("password")) {
            return false;
        }
          if(!confirm()){
          return false;
      }
  return true;
  }
 function checkFormModifica()
  {
    var falso = 0;
    var array =  ["mail","password","password1","user","nome","cognome","citta"] ;
     var i;
     var text = "*Campo obbligatorio";
      for (i = 0; i < array.length; i++) {

     if(document.getElementById(array[i]).value == "") {

     var a = "err" + array[i];
     var padre = document.getElementById(a);
     var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["borderColor"] = 'red';
        falso++;
        }

     }
      if(falso > 0){
          return false;
      }
      var array1 =  ["mail","password","user","nome","cognome","data","telefono"] ;
    for (i = 0; i < array1.length; i++){
        if(!validate(array1[i])) {
            return false;
        }
    }

  return true;
  }
function validate(id){
var ck ;
var text;
var liveMail = "false";
var liveUser = "false";
switch(id) {
    case "mail":
       var ck = /^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,40}$/;
        text = "*Formato email non valido.";
        liveMail = "true
        break;
    case "user":
        ck = /^[A-Za-z0-9_]{1,20}$/;
        text = "*Formato username non valido.Campo formato da lettere,numeri e _";
        liveUser = "true";
        break;
     case "telefono":
        ck = /^[0-9]{1,5}\-[0-9]{2,8}$/;
        text = "*Formato non valido.Dopo il prefisso inserire un trattino (Es 019-6775)";
        break;
    case "data":
        ck = /[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/;
        text = "*Formato non valido.Usare il seguente formato GG/MM/AAAA";
        break;
    case "password":
          ck =  /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
          text = "*Formato password non corretto. La password deve avere una lunghezza minima di 6 caratteri,contenere almeno una maiuscola ed almeno un numero.";
        break;
    default:
           ck = /^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]\s?)+$/;
           text = "*Formato non valido. Campo formato da sole lettere";
}

 var a = "err" + id;
var padre = document.getElementById(a);
 if(!ck.test(document.getElementById(id).value)) {
      a = "err" + id;
      padre = document.getElementById(a);
      var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["color"] = 'red';
      return false;
 }
   if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
   if(liveMail == "true"){
       liveCheck(id);
       return false;
   }
   if(liveUser == "true"){
       liveCheck(id);
       return false;
   }

  return true;
}
function pulisci(id){
    var err = "err" + id;
    var a = document.getElementById(id).value;
    var b = document.getElementById(err);
    if(a !== "" && b.hasChildNodes){
        b.removeChild(b.childNodes[0]);
    }
}
function confirm(){
    var a = document.getElementById("password");
    var b = document.getElementById("password1");
    var padre =document.getElementById("errpassword1");
    if(a.value !== b.value){
         var text = "*Le password non corrispondono!";
         var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["color"] = 'red';
         b.style["borderColor"] = 'red';
         return false;
    }
     b.style["borderColor"] = 'darkblue';
     if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
    return true;
}
function liveCheck(id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var text = xmlhttp.responseText;
             a = "err" + id;
      var padre = document.getElementById(a);
      var figlio = document.createTextNode(text);
         if(padre.hasChildNodes()){
             padre.removeChild(padre.childNodes[0]);
         }
         padre.appendChild(figlio);
          padre.style["color"] = 'red';
        }
    };
    var params = id+"="+document.getElementById(id).value;
    xmlhttp.open("POST","php/ajaxcheck.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length",params.length);
    xmlhttp.setRequestHeader("Connection","close");
    xmlhttp.send(params);

}
