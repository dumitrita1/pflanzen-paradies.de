/*var tabs = Array.from(document.querySelectorAll('.tab'));
var panels = Array.from(document.querySelectorAll('.tab-panel'));

function handleTabClick(event) {
  var currentTab = event.currentTarget;
  var index = tabs.indexOf(currentTab);
  var currentPanel = panels[index];

  for (var i = 0; i < panels.length; i++) {
    var panel = panels[i];
    panel.classList.remove('active');
  }

  currentPanel.classList.add('active');
}

for (var i = 0; i < tabs.length; i++) {
  var tab = tabs[i];
  tab.addEventListener('click', handleTabClick);
}
var buttonKeinPlan = document.querySelector('#button-keinPlan');
 var keinPlan = document.querySelector('#kein-plan');

 function handlePflanzenButtonClick() {
   pflanzenBuddy.classList.add('active');
   buttonPflanzen.classList.add('active');
   keinPlan.classList.remove('active');
buttonKeinPlan.classList.remove('active');
}
buttonPflanzen.addEventListener('click', handlePflanzenButtonClick);
*/

 var buttonPflanzen = document.querySelector('#button-pflanzen');
 var buttonKeinPlan = document.querySelector('#button-keinPlan');

 var pflanzenBuddy = document.querySelector('#pflanzen-buddy');
 var keinPlan = document.querySelector('#kein-plan');

 function handlePflanzenButtonClick() {
   pflanzenBuddy.classList.add('active');
   buttonPflanzen.classList.add('active');
   keinPlan.classList.remove('active');
   buttonKeinPlan.classList.remove('active');
 }
 buttonPflanzen.addEventListener('click', handlePflanzenButtonClick);

 function handleKeinPlanButtonClick() {
   pflanzenBuddy.classList.remove('active');
   buttonPflanzen.classList.remove('active');
   keinPlan.classList.add('active');
   buttonKeinPlan.classList.add('active');
 }
 buttonKeinPlan.addEventListener('click', handleKeinPlanButtonClick);
