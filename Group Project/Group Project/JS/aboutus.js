function  get(id)
{
    return  document.getElementById(id);
}

function  hideDetails()
{
    get("info").style.display="none";
}
function  showDetails()
{
    get("info").style.display="block";
}
