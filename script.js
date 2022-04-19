const body = document.getElementsByTagName("BODY")[0];
const country = document.querySelector(".country");
const state = document.querySelector(".state");
const city = document.querySelector(".city");
const org = document.querySelector(".org");
const dep = document.querySelector(".dep");
const cname = document.querySelector(".cname");
const email = document.querySelector(".email");
const submit = document.querySelector(".submit");
const param = [country, state, city, org, dep, cname, email];
const defval = [
  "LV",
  "Zemgale",
  "Jelgava",
  "RalfsORG",
  "IT",
  "www.ralfsorg.com",
  "ralfs@org.com",
];

//Change input values (custom/pre-made)
const preMade = document.querySelector("#premade");
const custom = document.querySelector("#custom");
preMade.addEventListener("click", function () {
  param.forEach((el, i) => {
    el.value = defval[i];
  });
});

custom.addEventListener("click", function () {
  param.forEach((el) => {
    el.value = "";
  });
});

submit.addEventListener("click", function () {
  preventDefault();
  if (country.value.length !== 2) {
    alert("Country code has to be exactly 2 letters!");
    country.value = "";
  }
});
