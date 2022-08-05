function randNumberScript() { //Why are you accepting a argument ?
    var randomNumberObject = Math.floor(Math.random() * 12010); //typo at Math
    document.getElementById("number").innerHTML = randomNumberObject;
}