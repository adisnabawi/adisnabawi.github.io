var a = "";
$("button").click(function() {
  if($(this).val() == "="){
    a = eval(a);
    document.getElementById("totalno").innerHTML = a;
  }else {
    a += $(this).val();
    document.getElementById("showno").innerHTML = a;
  }
});
