function add() {
    var hahaDiv = document.getElementById("haha");
    hahaDiv.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.className = "myform";
    // newDiv.setAttribute('id', 'myform2');
    newDiv.innerHTML =
        `<form class="myform" action="addPrice.php"  method="POST"
        <label>Enter City</label>
        <input type="text" name="city" class="field" required>
        <label>Enter Area</label>
        <input type="text" class="field" name="area" required>
        <label>Base Fare</label>
        <input type="text" class="field" name="base" required>
        <label>Hourly Rate</label>
        <input type="text" class="field" name="hourly" required>

        <a href="" style="text-decoration: none;color: black; width: 80px;"><button
                class="btn2">Submit</button></a>`;
    hahaDiv.appendChild(newDiv);
}

function edit() {
    var hahaDiv = document.getElementById("haha");
    hahaDiv.textContent = "";
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `                            <div id="search-div" class="search-div">
                                        <label>Select City</label>
                                        <select class="combo-box" name="" id="">
                                            <option value="">Dhaka</option>
                                            <option value="">Barishal</option>
                                            <option value="">Cumilla</option>
                                            <option value="">Rajshahi</option>
                                            <option value="">Lalbag</option>
                                        </select>
                                        <label>Select Area</label>
                                        <select class="combo-box" name="" id="">
                                            <option value="">Dhaka</option>
                                            <option value="">Barishal</option>
                                            <option value="">Cumilla</option>
                                            <option value="">Rajshahi</option>
                                            <option value="">Lalbag</option>
                                        </select>

                                        <button><img class="search-icon src_icn" src="images/search.png" alt=""></button>
                                    </div>
                                
                                    <div id="myform1" class="myform">
                                        
                                        <label>Base Fare</label>
                                        <input type="text" class="field" required>
                                        <label>Hourly Rate</label>
                                        <input type="text" class="field" required>
                                        <a href="availableGarage.html" style="text-decoration: none;color: black; width: 80px;"><button
                                                class="btn2">Submit</button></a>
                                    </div>`;
    hahaDiv.appendChild(newDiv);
}
