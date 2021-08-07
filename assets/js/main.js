function resNav() {
    var resNavID = document.getElementById("topNavigator");
    if (resNavID.className === "topnav") {
      resNavID.className += " responsive";
    } else {
      resNavID.className = "topnav";
    }
  }
async function API(xhr) {
  const server_id = 'vjjqk';
  let api = {
    get: (url, params) => {
      return new Promise((resolve, reject) => {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', url);
        xhr.onload = () => {
          if (xhr.status === 200) {
            resolve(JSON.parse(xhr.responseText));
          } else {
            reject(xhr.statusText);
          }
        }
      }, xhr);
    }
  };
  // fetch data from FiveM.net API eks. https://servers-frontend.fivem.net/api/servers/single/:server_id
  fetch(`https://servers-frontend.fivem.net/api/servers/single/${server_id}`)
  const response = await fetch(url);

  var data = await response.json();
      console.log(data);

  document.getElementById("clients").innerHTML = apiurl;
}
// LINK ACTIVE COLOR
const linkColor = document.querySelectorAll('.nav__link');   
function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
}

linkColor.forEach(l => l.addEventListener('click', colorLink));