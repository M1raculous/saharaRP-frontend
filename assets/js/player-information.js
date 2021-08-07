const api_url = "https://servers-frontend.fivem.net/api/servers/single/vjjjqk";

async function getapi(url) {
  const response = await fetch(url);

  var data = await response.json();
  console.dir(data);
  show(data);
}
getapi(api_url);
function show(data) {
    // <p class="player">${data["Data"]["players"][i]["id"]}: ${player} </p>
    // <div id="identifiers">
    // <p class="identifiers"> ${data["Data"]["players"][i]["identifiers"].join('\n\n')}</p>
    // <p class="ping"> ping: ${data["Data"]["players"][i]["ping"]}</p>
    // </div>
for (const i in data["Data"]["players"]) {
    let n = i;
    console.log(`${n}: ${data["Data"]["players"][i]["name"]}`);
    var player = data["Data"]["players"][i]["name"]
    // sort identifiers by abcdefghijklmnopqrstuvwxyz
    // make a row with the identifiers and the ping
    // make a table with the rows 
    function ids(data) {
        var ids = data["Data"]["players"][i]["identifiers"];
        var ids_sorted = ids.sort();
        var ids_string = ids_sorted.join("<br>");
        return ids_string;
    }
    console.log(ids(data));
    //  var identifiers = data["Data"]["players"][i]["identifiers"]
    //  identifiers.sort();
    //  console.log(identifiers);
    document.getElementById("player_information").innerHTML += `
    <div class="dropdown">
    <button class="dropbtn">${player}</button><br></br>
    <div class="dropdown-content">
       <a href="#">${ids(data)}</a>
      <a href="#"> ping: ${data["Data"]["players"][i]["ping"]}</a>
    </div>
  </div>
    `;
}
}