// ==UserScript==
// @name        WhatsappMessenger
// @namespace   Violentmonkey Scripts
// @match       https://addons.mozilla.org/fr/firefox/addon/violentmonkey/
// @grant       none
// @version     1.0
// @author      -
// @description 4/7/2022, 6:42:17 PM
// @inject-into content
// ==/UserScript==

function RequestAPI(url, data){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let json = JSON.parse(xhr.responseText);
            if(lastMessageDate){
                if(lastMessageDate != json["content"][0]["last_wirte_date"]){
                    window.location.replace("https://web.whatsapp.com/send?phone="+json["content"][0]["receiver"]+"&text="+json["content"][0]["message"]);
                }
            }else{
                lastMessageDate = json["content"][0]["last_wirte_date"];
            }
            if((getElementByXpath("/html/body/div[1]/div[1]/div[1]/div[4]/div[1]/footer/div[1]/div/span[2]/div/div[2]/div[1]/div/div[2]").innerText).length>1){
                sleep(1000);
                getElementByXpath("/html/body/div[1]/div[1]/div[1]/div[4]/div[1]/footer/div[1]/div/span[2]/div/div[2]/div[2]/button/span").click();
                lastMessageDate = json["content"][0]["last_wirte_date"];
            }
        }
    };
    xhr.send(data);
}

function getMessage(){
    let api = "app_whtsp_get";
    let pass = "1234567891234567";

    let data = JSON.stringify({"api": api, "pass": pass});
    let url = "http://localhost/Whatsapp-message-API-JS-PHP/";

    RequestAPI(url, data);
}

function getElementByXpath(path) {
    return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

let lastMessageDate;
setInterval(getMessage, 5000);