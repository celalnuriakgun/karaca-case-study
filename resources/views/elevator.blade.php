<link href="{{ asset('css/elevator.css') }}" rel="stylesheet">
<link href="{{ asset('css/elevator2.css') }}" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.5.0/dist/axios.min.js"></script>


<!-- <div style = "width: 100%; background: red; float: left;">
    <div id="canvas1">
        <div class="floorSelect">
            <h4>Select your floor</h4>
            <ul>
                <li data-floor="20">15</li>
                <li data-floor="19">14</li>
                <li data-floor="18">13</li>
                <li data-floor="17">12</li>
                <li data-floor="16">11</li>
                <li data-floor="15">10</li>
                <li data-floor="14">9</li>
                <li data-floor="13">8</li>
                <li data-floor="12">7</li>
                <li data-floor="11">6</li>
                <li data-floor="10">5</li>
                <li data-floor="9">4</li>
                <li data-floor="8">3</li>
                <li data-floor="7">2</li>
                <li data-floor="6">1</li>
                <li data-floor="5">0</li>
                <li data-floor="4">-1</li>
                <li data-floor="3">-2</li>
                <li data-floor="2">-3</li>
                <li data-floor="1">-4</li>
                <li data-floor="0">-5</li>
            </ul>
        </div>

        <div id="building"> 
            <div id="elevatorShaft">
            
            <div class="elevatorContainer" >
                <div id="strings"></div>
                <div id="elevator">
                    <div class="door active-left leftDoor"></div>
                    <div class="door active-right rightDoor"></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div id="canvas2">
        <div id="building"> 
            <div id="elevatorShaft">
            
            <div class="elevatorContainer" >
                <div id="strings"></div>
                <div id="elevator">
                    <div class="door active-left leftDoor"></div>
                    <div class="door active-right rightDoor"></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div id="canvas3">
        <div id="building"> 
            <div id="elevatorShaft">
            
            <div class="elevatorContainer" >
                <div id="strings"></div>
                <div id="elevator">
                    <div class="door active-left leftDoor"></div>
                    <div class="door active-right rightDoor"></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div id="canvas4" style="position: relative;">
        <div id="building"> 
            <div id="elevatorShaft">
            
            <div class="elevatorContainer" >
                <div id="strings"></div>
                <div id="elevator">
                    <div class="door active-left leftDoor"></div>
                    <div class="door active-right rightDoor"></div>
                </div>
            </div>
            </div>
        </div>
        
        <ul class="numbers">
            <li>15</li>
            <li>14</li>
            <li>13</li>
            <li>12</li>
            <li>11</li>
            <li>10</li>
            <li>09</li>
            <li>08</li>
            <li>07</li>
            <li>06</li>
            <li>05</li>
            <li>04</li>
            <li>03</li>
            <li>02</li>
            <li>01</li>
            <li>00</li>
            <li>-1</li>
            <li>-2</li>
            <li>-3</li>
            <li>-4</li>
            <li>-5</li>
        </ul>
    </div>


    <script>
        var current = 0;

        function setElevators(canvas = '', floor = 0, current = 0) {
            height = floor * 4.80,
            animate = Math.abs(current-floor) * 100;

            // if (floor == current) return;

            $("#canvas" + canvas + " .rightDoor").removeClass("active-right");   
            $("#canvas" + canvas + " .leftDoor").removeClass("active-left");

            setTimeout(function(){
                $("#canvas" + canvas + " .elevatorContainer").css("transition","all "+animate+"ms linear");
                $("#canvas" + canvas + " .elevatorContainer").css("bottom",height+"%");

                current = floor;

                setTimeout(function(){
                    $("#canvas" + canvas + " .rightDoor").addClass("active-right");   
                    $("#canvas" + canvas + " .leftDoor").addClass("active-left");  
                }, animate);
            }, 300);
        }

        $(document).ready(function() {
            setElevators(1, 5);
            
            $(".floorSelect li").click(function(){
                setElevators(1, parseInt($(this).data("floor")));
            });
        });
    </script>
</div> -->

<form action="/api/guncelle" method="post" id="register">
    <h3>Varsayılan Değerler</h3>
    A
    <input type="number" max="15" min="-5" name="A[floor]" value="5">
    <input type="number" max="15" min="-5" name="A[target]" value="9">
    <br>
    B
    <input type="number" max="15" min="-5" name="B[floor]" value="-1">
    <input type="number" max="15" min="-5" name="B[target]" value="-4">
    <br>
    C
    <input type="number" max="15" min="-5" name="C[floor]" value="14">
    <input type="number" max="15" min="-5" name="C[target]" value="0">
    <br>
    D
    <input type="number" max="15" min="-5" name="D[floor]" value="1">
    <input type="number" max="15" min="-5" name="D[target]" value="5">

    <input type="submit" value="Sıfırla">
</form>

<form action="/api/stop" method="get" id="stop">
    <input type="submit" value="Durdur">
</form>

<form action="/api/" id="testget">
    <table style="border: 1px solid gray;">
        <thead>
            <tr>
                <td><label id="labelA">A</label></td>
                <td><label id="labelB">B</label></td>
                <td><label id="labelC">C</label></td>
                <td><label id="labelD">D</label></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label id="labelAD">-</label></td>
                <td><label id="labelBD">-</label></td>
                <td><label id="labelCD">-</label></td>
                <td><label id="labelDD">-</label></td>
            </tr>
        </tbody>

    </table>

    Bulunduğunuz kat:
    <input type="text" name="currentFloor" id="currentFloor" value="0">

    Gitmek istediğiniz kat (kişi olarak): 
    <select name="target" id="users"></select>
</form>

<script>
    axios.get('/api/users').then(function (response) {
        const select = $('#users');
        select.empty();

        response.data.forEach((data,  index) => {
            select.append(`<optgroup label="${data.name}">`);

            data.floor.forEach((f,  index) => {
                select.append(`<option value="${f.floor}">${f.floor}</option>`);
            });

            select.append(`</optgroup>`);
        });
    });

    $("#register").submit(function(){
        event.preventDefault();

        axios.post('/api/elevators-update', $("#register").serialize())
        .then(function (response) {
            location.reload();
        });
    });

    $("#stop").submit(function(){
        event.preventDefault();

        axios.get('/api/stop', $("#stop").serialize())
        .then(function (response) {
            location.reload();
        });
    });

    $("#testget").submit(function(){
        event.preventDefault();

       getUsers(); 
    });

    $(document).ready(function () {
        var stopInterval = setInterval(() => {
            axios.get('/api/elevators-start', $("#register").serialize())
            .then(function (response) {

                axios.get('/api/elevators', $("#stop").serialize())
                .then(function (response) {
                    response.data.forEach(element => {
                        $('#label' + element.name + 'D').text(element.floor);
                        // setElevators(element.id, element.floor)
                    });

                    const allReachedTarget = response.data.every(item => item.target === item.floor);

                    if (allReachedTarget) {
                        clearInterval(stopInterval);
                    }
                });
            });

            getUsers();
        }, 1000);
    })


    function getUsers () {
        axios.get('/api/elevators/' + $('#currentFloor').val() + '/' + $('#users').val(), $("#stop").serialize())
        .then(function (response) {
            $('label').css('background', 'none');
            $('#label' + response.data.name).css('background', 'yellow');
        });
    }
</script>