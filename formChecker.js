function validate(inputText)
{
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
    alert("Valid email address!");
    document.form1.text1.focus();
    return true;
}
else
{
    alert("Invalid email address!");
    document.form1.text1.focus();
    return false;
}
}