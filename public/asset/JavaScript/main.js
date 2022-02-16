//  js for countTime

let countDownDate = new Date("feb 13, 2022 00:00:00").getTime();
// console.log(countDownDate);

let counter = setInterval(() => {
    //Get Date Now
  let dateNow = new Date().getTime();

  //Fine The Date Difference Between Now And Countdown Date
  let dateDiffernt = countDownDate - dateNow;

  //Get Time Units
  let days = Math.floor(dateDiffernt / (1000 * 60 * 60 * 24));
  let hours = Math.floor((dateDiffernt % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((dateDiffernt % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((dateDiffernt % (1000 * 60)) / 1000);


  document.querySelector(".days").innerHTML = days;
  document.querySelector(".hours").innerHTML = hours;
  document.querySelector(".minutes").innerHTML = minutes;
  document.querySelector(".seconds").innerHTML = seconds;

  if (dateDiffernt < 0){
      clearInterval()
  }

}, 1000);

// End js for countTime


// Start Select Menue
 document.querySelector('.select-field').addEventListener('click',()=>{
   document.querySelector('.list').classList.toggle('show');
   document.querySelector('.down-arrow').classList.toggle('rotate180');
});
// End Select Menue

// Start Select Menue
document.querySelector('.select-field2').addEventListener('click',()=>{
    document.querySelector('.list2').classList.toggle('show2');
    document.querySelector('.down-arrow2').classList.toggle('rotate1802');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field3').addEventListener('click',()=>{
    document.querySelector('.list3').classList.toggle('show3');
    document.querySelector('.down-arrow3').classList.toggle('rotate1803');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field4').addEventListener('click',()=>{
    document.querySelector('.list4').classList.toggle('show4');
    document.querySelector('.down-arrow4').classList.toggle('rotate1804');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field5').addEventListener('click',()=>{
    document.querySelector('.list5').classList.toggle('show5');
    document.querySelector('.down-arrow5').classList.toggle('rotate1805');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field6').addEventListener('click',()=>{
    document.querySelector('.list6').classList.toggle('show6');
    document.querySelector('.down-arrow6').classList.toggle('rotate1806');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field7').addEventListener('click',()=>{
    document.querySelector('.list7').classList.toggle('show7');
    document.querySelector('.down-arrow7').classList.toggle('rotate1807');
 });
 // End Select Menue

 // Start Select Menue
document.querySelector('.select-field8').addEventListener('click',()=>{
    document.querySelector('.list8').classList.toggle('show8');
    document.querySelector('.down-arrow8').classList.toggle('rotate1808');
 });
 // End Select Menue


