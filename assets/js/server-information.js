const api_url = "https://servers-frontend.fivem.net/api/servers/single/vjjjqk";

async function getapi(url) {
  const response = await fetch(url);

  var data = await response.json();
  console.dir(data);
  show(data);
}
getapi(api_url);
function show(data) {
    /*
      <p class="player">${data["Data"]["players"][i]["id"]}: ${player} </p>
      <h2 class="h2-identifiers">Identifiers</h2>
      <strong><p class="identifiers"> ${data["Data"]["players"][i]["identifiers"].join('\n\n')}</p>
      <p class="ping"></strong> ping: ${data["Data"]["players"][i]["ping"]}</p>
      <p class="player"></p>
    */
    /*
    * We need to acces all the data, we do so by taking the data from the API
    */
  
    if (data["Data"]["vars"]["txAdmin-version"]) {
      txAdminVersion = `txAdmin-Version:<br> ${data["Data"]["vars"]["txAdmin-version"]}</br>`;
      txAdmin = "txAdmin:\n Ja";
    } else {
      txAdmin = "txAdmin:\n Nej";
    }
    if (data["Data"]["resources"]) {
      resources = `Resources: ${data["Data"]["resources"].length}`;
    }
    if (data["Data"]["vars"]["sv_enforceGameBuild"]) {
      build = `Gamebuild: ${data["Data"]["vars"]["sv_enforceGameBuild"]}`;
    }
    if (data["Data"]["vars"]["tags"]) {
      build = `Tags: ${data["Data"]["vars"]["tags"]}`;
    }
    const getResources = data["Data"]["resources"];
    if (getResources.includes("essentialmode")) {
      framework = "Framework: ESX";
    } else {
      framework = "Framework: Andet";
    }
  
    let serverInformation = `
    <div class="server__information">
    <h1 class="m main_informatiom_box_players_header">Server Information</h1>
    <p class="framework"> ${framework}</p>
    <p class="txAdmin">${txAdmin}</p>
    <p class="txAdmin-Version">${txAdminVersion}</p>
    <p class="cfx-ip"> CFX:<br>${data["EndPoint"]}</br></p>
    <p class="resources">${resources}</p>
    <p class="build">${build}</p>
    <h1 class="m main_informatiom_box_players_header">Ejer Information</h1>
    <p>Ejer Navn: ${data["Data"]["ownerName"]}</p>
    <p>Ejer Profil: <a href="${data["Data"]["ownerProfile"]}">cfx.re/${data["Data"]["ownerName"]}</a></p>
    <p>Ejer Avatar: <a href="${data["Data"]["ownerAvatar"]}">cfx.re/avatar</a></p>
    <h1 id="test" class="m main_informatiom_box_players_header">Statastik For Nørder</h1>
    <p>Gamebuild: ${data["Data"]["vars"]["sv_enforceGameBuild"]}</p>
    <p>Host Support: ${data["Data"]["vars"]["sv_enhancedHostSupport"]}</p>
    <p>Sv_lan: ${data["Data"]["vars"]["sv_lan"]}</p>
    <p>sv_maxClients: ${data["Data"]["vars"]["sv_maxClients"]}</p>
    <p>sv_scriptHookAllowed: ${data["Data"]["vars"]["sv_scriptHookAllowed"]}</p>
    <p>Premium: ${data["Data"]["vars"]["premium"]}</p>
    </div>`;
    document.getElementById("server-information").innerHTML = serverInformation
}