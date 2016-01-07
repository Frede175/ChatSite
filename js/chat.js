function update()
{
    //TODO: Contact sever, to see if there are new messages.
}


function initalize()
{
    setTimeout(update(), 1000);
}



window.onload = initalize();