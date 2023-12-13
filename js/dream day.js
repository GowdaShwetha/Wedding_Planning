
let loginForm = document.querySelector('.container');
let formClose = document.querySelector('.form-close');
let videoBtn = document.querySelectorAll('.vid-btn');

let venuesBtn = document.querySelector('.venues a span i');
let venuesDisplay = document.querySelector('.venues ul');

let photographersBtn = document.querySelector('.photographers a span i');
let photographersDisplay = document.querySelector('.photographers ul');

let makeupBtn = document.querySelector('.makeup a span i');
let makeupDisplay = document.querySelector('.makeup ul');

let bridalwearBtn = document.querySelector('.bridal-wear a span i');
let bridalwearDisplay = document.querySelector('.bridal-wear ul');

let groomwearBtn = document.querySelector('.groom-wear a span i');
let groomwearDisplay = document.querySelector('.groom-wear ul');

let mehndiBtn = document.querySelector('.mehndi a span i');
let mehndiDisplay = document.querySelector('.mehndi ul');

let planningBtn = document.querySelector('.planning a span i');
let planningDisplay = document.querySelector('.planning ul');

let foodBtn = document.querySelector('.food a span i');
let foodDisplay = document.querySelector('.food ul');

let invitesBtn = document.querySelector('.invites a span i');
let invitesDisplay = document.querySelector('.invites ul');

let musicBtn = document.querySelector('.music a span i');
let musicDisplay = document.querySelector('.music ul');

let jewelleryBtn = document.querySelector('.jewellery a span i');
let jewelleryDisplay = document.querySelector('.jewellery ul');


/*formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});*/


/*document.querySelector('.form-close').onclick = () =>{
    document.querySelector('.container').classList.remove('active');
}*/
function close(){
     window.location="file:///C:/Users/shwet/OneDrive/Desktop/dream%20day/dream%20day.html#vendors"
}

videoBtn.forEach(btn =>{
    btn.addEventListener('click', () =>{
       document.querySelector('.controls .active').classList.remove('active');
       btn.classList.add('active');
       let src= btn.getAttribute('data-src');
       document.querySelector('#video-slider').src = src
    });
});

venuesBtn.addEventListener('click', () =>{
    venuesDisplay.classList.toggle('active');
});

photographersBtn.addEventListener('click', () =>{
    photographersDisplay.classList.toggle('active');
});
makeupBtn.addEventListener('click', () =>{
    makeupDisplay.classList.toggle('active');
});
bridalwearBtn.addEventListener('click', () =>{
    bridalwearDisplay.classList.toggle('active');
});
groomwearBtn.addEventListener('click', () =>{
    groomwearDisplay.classList.toggle('active');
});
mehndiBtn.addEventListener('click', () =>{
    mehndiDisplay.classList.toggle('active');
});

planningBtn.addEventListener('click', () =>{
    planningDisplay.classList.toggle('active');
});
foodBtn.addEventListener('click', () =>{
    foodDisplay.classList.toggle('active');
});

invitesBtn.addEventListener('click', () =>{
    invitesDisplay.classList.toggle('active');
});

musicBtn.addEventListener('click', () =>{
    musicDisplay.classList.toggle('active');
});

jewelleryBtn.addEventListener('click', () =>{
    jewelleryDisplay.classList.toggle('active');
});

function resort()
{
    window.location="./gallery/resort.html";
}  

function dest(){
    window.location="./gallery/destination.html";
}

function kalyan(){
    window.location="./gallery/kalyana.html";
}
function photo(){
    window.location="./gallery/photography.html"
}
function makeup1(){
    window.location="./gallery/bridal%20makeup.html"
}
function wear1(){
    window.location="./gallery/bridal%20wear.html"
}
function wear2(){
    window.location="./gallery/groom%20wear.html"
}
function saree(){
    window.location="./gallery/saree.html"
}
function suit(){
    window.location="./gallery/suit.html"
}
function mehndi(){
    window.location="./gallery/mehendi.html"
}
function decor(){
    window.location="./gallery/decor.html"
}
function invite(){
    window.location="./gallery/invi.html"
}
function gift(){
    window.location="./gallery/gift.html"
}
function food(){
    window.location="./gallery/food.html"
}
function cake(){
    window.location="./gallery/cake.html"
}
function sangeet(){
    window.location="./gallery/sangeeth.html"
}
function jewellerys(){
    window.location="./gallery/jewellerys.html"
}
function flower(){
    window.location="./gallery/flower%20jewel.html"
}

function photoShop()
{
    window.location="./gallery/photoShop.html"
}
function makeupShop()
{
    window.location="./gallery/makeupShop.html"
}
function brideShop()
{
    window.location="./gallery/brideShop.html"
}
function groomShop()
{
    window.location="./gallery/groomShop.html"
}
function coupleShop()
{
    window.location="./gallery/coupleShop.html"
}
function chat(){
    window.location="http://localhost/contact/form.php"
}

function jewellShop()
{
    window.location="./gallery/jewellshop.html"
}

function idea()
{
    window.location="./gallery/ideaImage1.html"
}

function ideaImg()
{
    window.location="./gallery/ideaImage2.html"
}

function ideaImage()
{
    window.location="./gallery/ideaImage3.html"
}

function ideasImg()
{
    window.location="./gallery/ideaImage4.html"
}

function form()
{
    window.location="http://localhost/form/login%20form.php"
}

function video(){
    window.location="./gallery/video.html"
}
