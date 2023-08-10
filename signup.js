function showVehicle() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<h2>Vehicle Owner Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input>
                            <label>Email: </label>
                            <input>
                            <label>Password: </label>
                            <input>
                            <label>National ID: </label>
                            <input>
                            <label>Phone Number: </label>
                            <input>
                            <label>License Number: </label>
                            <input>
                            <label>Vehicle Registration Number: </label>
                            <input>
                            <label>Vehicle Type: </label>
                            <input>
                            <label>Vehicle Model: </label>
                            <input>
                            <br>
                            <button class="submit">Submit</button>
                        </div>
                        <br><br><br>`;
    oldContent.appendChild(newDiv);
}

function showGarage() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<h2>Garage Owner Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input>
                            <label>Email: </label>
                            <input>
                            <label>Password: </label>
                            <input>
                            <label>National ID: </label>
                            <input>
                            <label>Phone Number: </label>
                            <input>
                            <label>Garage Address: </label>
                            <input>
                            <label>Garage Size/Area: </label>
                            <input>
                            <label>Garage Capacity: </label>
                            <input>
                            <label>Supervisor National ID: </label>
                            <input>
                            <br>
                            <button class="submit">Submit</button>
                        </div>
                        <br><br><br>`;
    oldContent.appendChild(newDiv);
}

function showSuper() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<h2>Supervisor Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input>
                            <label>Email: </label>
                            <input>
                            <label>Password: </label>
                            <input>
                            <label>National ID: </label>
                            <input>
                            <label>Phone Number: </label>
                            <input>
                            <br>
                            <button class="submit">Submit</button>
                        </div>
                        <br><br><br>`;
    oldContent.appendChild(newDiv);
}