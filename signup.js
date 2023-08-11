function showVehicle() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<br><br>
                        <h2>Vehicle Owner Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input class="field" required>
                            <label>Email: </label>
                            <input class="field" required>
                            <label>Password: </label>
                            <input class="field" required>
                            <label>National ID: </label>
                            <input class="field" required>
                            <label>Phone Number: </label>
                            <input class="field" required>
                            <label>License Number: </label>
                            <input class="field" required>
                            <label>Vehicle Registration Number: </label>
                            <input class="field" required>
                            <label>Vehicle Type: </label>
                            <input class="field" required>
                            <label>Vehicle Model: </label>
                            <input class="field" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}

function showGarage() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<br><br>
                        <h2>Garage Owner Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input class="field" required>
                            <label>Email: </label>
                            <input class="field" required>
                            <label>Password: </label>
                            <input class="field" required>
                            <label>National ID: </label>
                            <input class="field" required>
                            <label>Phone Number: </label>
                            <input class="field" required>
                            <label>Garage Address: </label>
                            <input class="field" required>
                            <label>Garage Size/Area: </label>
                            <input class="field" required>
                            <label>Garage Capacity: </label>
                            <input class="field" required>
                            <label>Supervisor National ID: </label>
                            <input class="field" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}

function showSuper() {
    var oldContent = document.getElementById('form');
    oldContent.textContent = "";
    var newDiv = document.createElement('div');
    newDiv.innerHTML = `<br><br>
                        <h2>Supervisor Form</h2>
                        <div class="form">
                            <label>Full Name: </label>
                            <input class="field" required>
                            <label>Email: </label>
                            <input class="field" required>
                            <label>Password: </label>
                            <input class="field" required>
                            <label>National ID: </label>
                            <input class="field" required>
                            <label>Phone Number: </label>
                            <input class="field" required>
                            <br>
                            <input type="submit" class="submit"></input>
                        </div>
                        <br>`;
    oldContent.appendChild(newDiv);
}