// function to redirect to home page when fetched data
function changeWindowLocation(){
    var message = document.getElementById("message");
    if(message){
        window.location = "/";
    }
}

changeWindowLocation();