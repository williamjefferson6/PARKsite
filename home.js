function viewGarage(){
    var oldContent = document.getElementById('homeCard');
    oldContent.textContent="";
    var newDiv =document.createElement('div');
    newDiv.innerHTML= `  <div style="width: 400px;margin-top: 20px;">
    <h1>Rent your garage now and start earning extra!</h1>
    <p>Get the best out of your unused garages!</p>
    <br>
    <button style=" height: 50px;font-size: 1.2em;border: none; border-radius: 50px;background-color: #9ed368;width: 100px;" onmouseover="this.style.backgroundColor='#8bc052'"
        onmouseout="this.style.backgroundColor='#9ed368'">Sign Up</button>
</div>
    `;
    oldContent.appendChild(newDiv);
}
// function changeGarage(){
//     var oldContent = document.getElementById('b');
//     oldContent.textContent="";
//     var newDiv =document.createElement('div');
//     newDiv.innerHTML= `
//     `;
//     oldContent.appendChild(newDiv);
// }
function changeBackgroundImage1() {
    var div1 = document.getElementById('banner');
    div1.style.backgroundImage = "url('images/young-pregnant-woman-testing-car-car-showroom.jpg')";
    div1.style.backgroundSize = "contain";
    div1.style.backgroundRepeat = "no-repeat";
}
function changeBackgroundImage2() {
    var div1 = document.getElementById('banner');
    div1.style.backgroundImage = "url('images/parking.jpg')";
    banner.style.backgroundSize = "contain";
    banner.style.backgroundRepeat = "no-repeat";
}
function changeBackgroundImage3() {
    var div1 = document.getElementById('banner');
    div1.style.backgroundImage = "url('images/security-guard-workspace.jpg')";
    div1.style.backgroundSize = "contain";
    div1.style.backgroundRepeat = "no-repeat";
}

function viewParking(){
    var oldContent = document.getElementById('homeCard');
    oldContent.textContent="";
    var newDiv =document.createElement('div');
    newDiv.innerHTML= ` 
    <div style="width: 400px;margin-top: 30px; ">
    <h2>Looking for a parking spot?</h2>
    <input style="height: 40px;width: 16vw; border-radius: 5px; margin: 10px 10px 10px 0px;"
        type="text" placeholder="Enter Current Location">
    <br>
    <input style="height: 40px;width: 16vw; border-radius: 5px; margin: 10px 10px 10px 0px;"
        type="text" placeholder="Enter Desired Location">
    <br>
    <button
        style=" height: 50px;font-size: 1.2em;border: none; border-radius: 50px;background-color: #9ed368;width: 100px; margin-top: 20px;"
        onmouseover="this.style.backgroundColor='#8bc052'"
        onmouseout="this.style.backgroundColor='#9ed368'">Search</button>
    <button
        style=" height: 50px;font-size: 1.2em;border: none;border: 2px solid #9ed368; border-radius: 50px;background-color: white;width: 100px; margin-top: 20px;margin-left: 10px;"
        onmouseover="this.style.backgroundColor='#9ed368'"
        onmouseout="this.style.backgroundColor='white'">Sign Up</button>
    </div>
    `;
    oldContent.appendChild(newDiv);
}

function viewSuper(){
    var oldContent = document.getElementById('homeCard');
    oldContent.textContent="";
    var newDiv =document.createElement('div');
    newDiv.innerHTML= ` <div style="width: 400px;margin-top: 50px;">
    <h1>Earn more by ensuring security</h1>
    <p>Sign up to earn extra by guarding garages!</p>
    <br>
    <button style=" height: 50px;font-size: 1.2em;border: none; border-radius: 50px;background-color: #9ed368;width: 100px;" onmouseover="this.style.backgroundColor='#8bc052'"
        onmouseout="this.style.backgroundColor='#9ed368'">Sign Up</button>
</div>
    `;
    oldContent.appendChild(newDiv);
}