function initServerData(serverIp, serverPort) {
    const serverIpElement = document.getElementById('server_ip');
    serverIpElement.innerHTML = serverIp;
    fetch('https://mcapi.us/server/status?ip=' + serverIp + '&port=' + serverPort)
        .then(response => response.json())
        .then(data => handleServerStatus(data));
}

function handleServerStatus(data) {
    if (data.status == 'error') {
        console.log(data.error);
        return false;
    }

	const isOnline = document.getElementById("is_online");
    isOnline.innerHTML = data.online ? 'Online' : 'Offline';

    const motd = document.getElementById("motd");
    motd.innerHTML = data.motd;

    const playerCounter = document.getElementById("player_count");
    playerCounter.innerHTML = data.players.now;

    const playerCounterMax = document.getElementById("player_max");
    playerCounterMax.innerHTML = data.players.max;

    const logo = document.getElementById("server_icon");
    logo.src = data.favicon;
}
