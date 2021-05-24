function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";

}


function openMsg(){
    document.getElementById('msg').style.display = "block";
}
function closeMsg(){
    document.getElementById('msg').style.display = "none";
}
function openInbox(){
    document.getElementById('inbox').style.display = "block";
}
function closeInbox(){
    document.getElementById('inbox').style.display = "none";
}
function openSent(){
    document.getElementById('sent').style.display = "block";
}
function closeSent(){
    document.getElementById('sent').style.display = "none";
}
