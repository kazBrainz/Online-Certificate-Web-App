function getName()
{
    var name = window.location.href.split("?name=")[1].split("+").join(" ");
    var fieldNameElement = document.getElementById('myDiv');
    var oldText=fieldNameElement.innerHTML;
    fieldNameElement.innerHTML = oldText+' '+name;
}
