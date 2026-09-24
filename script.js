// function to copy the link + the value to the clipboard
function copy(value) {
    //format the link
    value = window.location + value
    //copy it to el clipboard
    navigator.clipboard.writeText(value)
}


//variable to store open state
let chatOpen = false;

//setup the chat box so that it pops up when the user clicks it
//get the chat boxes
let a = document.getElementsByClassName("chattop");
let b = document.getElementsByClassName("chat");
if (a.length >0 && b.length >0) {
    //get the first element in each
    a = a[0];
    b = b[0];
    //get the input box
    let c = document.getElementById("chatbox");

    //listen for title being clicked to close/open chat box
    a.addEventListener("click", function() {
        chatOpen = !chatOpen;
        //if open open it
        if (chatOpen) {
            b.style.visibility = "visible";
            b.style.height = "460px";
        }
        else { //if closed close it
            b.style.visibility = "hidden";
            b.style.height = "0";
        }
    });

    //add listener to the chatbox input
    c.addEventListener("keypress", function(e) {
        //when user enters
        if (e.key === "Enter") {
            //save users msg and reset box
            msg = c.value;
            c.value = "";
        }
    })
}