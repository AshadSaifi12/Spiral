
function validate(){
   let email=document.getElemetById("email");
    let name=document.getElemetById("name");
    let pass=document.getElemetById("password");
    if ((length.email==0) || (length.name==0) || (length.pass==0)){
        document.alert("Every Feild is mandatory");
    }
}