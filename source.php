<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    async function getRouteDuration(origin, destination, dateTime, cellId) {
        const travelMode = 'driving';
        const url = `https://dev.virtualearth.net/REST/v1/Routes/DistanceMatrix?origins=${origin}&destinations=${destination}&traffic=true&startTime=${dateTime}&travelMode=driving&key=`;
        console.log(url);

        try {
            const response = await fetch(url);
            const data = await response.json();
            const duration = data.resourceSets[0].resources[0].results[0].travelDuration;
            const routeInfo = document.getElementById(cellId);
            routeInfo.innerHTML = `${Math.ceil(duration)}`;
        } catch (error) {
            console.error(error);
        }
    }

    async function fetchData1() {
        var cellIds = ['i1', 'i2', 'i3', 'i4', 'i5', 'i6', 'i7', 'i8', 'i9', 'i10', 'i11', 'i12', 'i13', 'i14', 'i15', 'i16', 'i17', 'i18', 'i19', 'i20', 'i21', 'i22', 'i23', 'i24', 'i25'];
        var origin = '55.69256000,37.53453300';
        var destination = '55.7048290, 37.5123100';
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-06-01', '2023-06-02', '2023-06-03', '2023-06-04', '2023-06-05']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData1();

    async function fetchData2() {
        var cellIds = ['l1', 'l2', 'l3', 'l4', 'l5', 'l6', 'l7', 'l8', 'l9', 'l10', 'l11', 'l12', 'l13', 'l14', 'l15', 'l16', 'l17', 'l18', 'l19', 'l20', 'l21', 'l22', 'l23', 'l24', 'l25'];
        var origin = '55.69256000,37.53453300';
        var destination = '55.7100618, 37.5432298';
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData2();

    async function fetchData3() {
        var cellIds = ['d1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'd17', 'd18', 'd19', 'd20', 'd21', 'd22', 'd23', 'd24', 'd25'];
        var origin = '55.7100618, 37.5432298';
        var destination = '55.7048290, 37.5123100';
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData3();

    async function fetchData4() {
        var cellIds = ['u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'u7', 'u8', 'u9', 'u10', 'u11', 'u12', 'u13', 'u14', 'u15', 'u16', 'u17', 'u18', 'u19', 'u20', 'u21', 'u22', 'u23', 'u24', 'u25'];
        var origin = '55.69333,37.49111';
        var destination = '55.69722,37.52917';
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData4();

    async function fetchData5() {
        var cellIds = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 'p13', 'p14', 'p15', 'p16', 'p17', 'p18', 'p19', 'p20', 'p21', 'p22', 'p23', 'p24', 'p25'];
        var origin = '55.7086,37.5706';
        var destination = '55.7201,37.5438';
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData5();

    async function fetchData6() {
        var cellIds = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'h7', 'h8', 'h9', 'h10', 'h11', 'h12', 'h13', 'h14', 'h15', 'h16', 'h17', 'h18', 'h19', 'h20', 'h21', 'h22', 'h23', 'h24', 'h25'];
        var origin = '55.7526,37.6160'; // Minskaya Metro Station, Moscow
        var destination = '55.7047,37.5114'; // Park Pobedy, Moscow
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData6();

    async function fetchData7() {
        var cellIds = ['j1', 'j2', 'j3', 'j4', 'j5', 'j6', 'j7', 'j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'j14', 'j15', 'j16', 'j17', 'j18', 'j19', 'j20', 'j21', 'j22', 'j23', 'j24', 'j25'];
        var origin = '55.7047,37.5114'; // Park Pobedy, Moscow
        var destination = '55.7186,37.5706'; // Metro Studencheskaya, Moscow
        var times = ['06:00', '07:00', '08:00', '09:00', '10:00'];
        var dates = ['2023-02-21', '2023-02-22', '2023-02-23', '2023-02-24', '2023-02-25']; // предварительно созданный массив дат

        for (let i = 0; i < cellIds.length; i += 5) {
            var m = 0;
            for (let k = i; k < i + 5; k++) {
                var cellId = cellIds[k];

                var randomNumber = Math.floor(Math.random() * 2) + 1;
                if (randomNumber === 1) {
                    await getRouteDuration(origin, destination, `${dates[m]}T${times[m]}Z`, cellId);
                } else {
                    await getRouteDuration(destination, origin, `${dates[m]}T${times[m]}Z`, cellId);
                }
                m++;
            }
            m = 0;
        }
    }

    fetchData7();

    function setFi(symbol) {
        var sum = 0;
        var element = "";
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the sum
            sum += parseInt(element.innerHTML, 10);
        }
        var fi = sum / 25;
        element = document.getElementById(symbol + "phi");
        element2 = document.getElementById(symbol + "phi2");
        element.innerHTML = fi.toFixed(2);
        element2.innerHTML = fi.toFixed(2);
        element3 = document.getElementById(symbol + "phi3");
        element3.innerHTML = fi.toFixed(2);
    }

    function setStandardDeviation(symbol) { // replace with your actual element ID prefix
        var arr = []; // initialize an empty array

        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }
        const n = arr.length;
        const mean = arr.reduce((a, b) => a + b, 0) / n;
        element = document.getElementById(symbol + "dev");
        element2 = document.getElementById(symbol + "dev2");
        element3 = document.getElementById(symbol + "dev3");
        element.innerHTML = Math.sqrt(arr.reduce((a, b) => a + Math.pow(b - mean, 2), 0) / n).toFixed(2);
        element2.innerHTML = Math.sqrt(arr.reduce((a, b) => a + Math.pow(b - mean, 2), 0) / n).toFixed(2);
        element3.innerHTML = Math.sqrt(arr.reduce((a, b) => a + Math.pow(b - mean, 2), 0) / n).toFixed(2);
        console.log(element3);
    }

    function setDif(symbol) {
        var element1 = document.getElementById(symbol + "phi");
        var element2 = document.getElementById(symbol + "dev");
        var element = document.getElementById(symbol + "dif");
        element.innerHTML = (element1.innerHTML - element2.innerHTML).toFixed(2);
    }

    function setPlus(symbol) {
        var element1 = document.getElementById(symbol + "phi");
        var element2 = document.getElementById(symbol + "dev");
        var element = document.getElementById(symbol + "plus");
        // convert the innerHTML of element1 and element2 to floating-point numbers
        var num1 = parseFloat(element1.innerHTML);
        var num2 = parseFloat(element2.innerHTML);
        element.innerHTML = (num1 + num2).toFixed(2);
    }

    function calculateXi2pr(symbol) {
        var AJ3 = document.getElementById(symbol + "E1").innerHTML;
        var AK3 = document.getElementById(symbol + "E2").innerHTML;
        var AL3 = document.getElementById(symbol + "E3").innerHTML;
        var AM3 = document.getElementById(symbol + "E4").innerHTML;

        var AF3 = document.getElementById(symbol + "O1").innerHTML;
        var AG3 = document.getElementById(symbol + "O2").innerHTML;
        var AH3 = document.getElementById(symbol + "O3").innerHTML;
        var AI3 = document.getElementById(symbol + "O4").innerHTML;

        // Convert all the values to numbers
        AJ3 = parseFloat(AJ3);
        AK3 = parseFloat(AK3);
        AL3 = parseFloat(AL3);
        AM3 = parseFloat(AM3);
        AF3 = parseFloat(AF3);
        AG3 = parseFloat(AG3);
        AH3 = parseFloat(AH3);
        AI3 = parseFloat(AI3);

        // Perform the calculation
        var xi2pr = Math.pow(AF3 - AJ3, 2) / AJ3 + Math.pow(AG3 - AK3, 2) / AK3 +
            Math.pow(AH3 - AL3, 2) / AL3 + Math.pow(AI3 - AM3, 2) / AM3;

        // Do something with the result (e.g. display it in an element with the ID "symbolXi2pr")
        var elementXi2pr = document.getElementById(symbol + "Xi2pr");
        elementXi2pr.innerHTML = xi2pr.toFixed(2);
    }

    function setO1(symbol) {
        var element1 = document.getElementById(symbol + "dif");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return el <= parseInt(element1.innerHTML, 10);
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO1 = document.getElementById(symbol + "O1");
        elementO1.innerHTML = count;
    }

    function setO2(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "dif");
        var element2 = document.getElementById(symbol + "phi");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element1.innerHTML, 10) && (el <= parseInt(element2.innerHTML, 10)));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO2 = document.getElementById(symbol + "O2");
        elementO2.innerHTML = count;
    }

    function setO3(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "phi");
        var element2 = document.getElementById(symbol + "plus");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element1.innerHTML, 10) && (el <= parseInt(element2.innerHTML, 10)));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O3");
        elementO3.innerHTML = count;
    }

    function setO4(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "phi");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element1.innerHTML, 10));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O4");
        elementO3.innerHTML = count;
    }

    function setO1alt(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "a");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el <= parseInt(element1.innerHTML, 10));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O1a");
        elementO3.innerHTML = count;
    }

    function setO2alt(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "a");
        var element2 = document.getElementById(symbol + "phi");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element1.innerHTML, 10) && el <= parseInt(element2.innerHTML, 10));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O2a");
        elementO3.innerHTML = count;
    }

    function setO3alt(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "phi");
        var element2 = document.getElementById(symbol + "b");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element2.innerHTML, 10) && el <= parseInt(element2.innerHTML, 10));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O3a");
        elementO3.innerHTML = count;
    }

    function setO4alt(symbol) {
        var count = 0;
        var element1 = document.getElementById(symbol + "b");
        var arr = [];
        for (var j = 1; j <= 25; j++) {
            // Get a reference to the current element using its ID
            var element = document.getElementById(symbol + j);

            // Add the value of the element's innerHTML (converted to an integer) to the array
            arr.push(parseInt(element.innerHTML, 10));
        }

        // Filter the elements of the array that are less than the value of element1
        var filteredArr = arr.filter(function(el) {
            return (el > parseInt(element1.innerHTML, 10));
        });

        // Get the length of the filtered array
        var count = filteredArr.length;

        // Do something with the count (e.g. display it in an element with the ID "symbolO1")
        var elementO3 = document.getElementById(symbol + "O4a");
        elementO3.innerHTML = count;
    }

    function chiSquareRightTail(symbol, type) {
        var x = parseFloat(document.getElementById(symbol + "Xi2pr").innerHTML);
        const a = 0.5; // For degrees of freedom = 1

        var element2 = document.getElementById(symbol + "var1");
        if (type == 2) {
            x = parseFloat(document.getElementById(symbol + "Xi2prA").innerHTML);
            element2 = document.getElementById(symbol + "var2");
        }

        // Use the Taylor series expansion of the incomplete gamma function to calculate the right tail probability
        var eps = 1e-16; // Tolerance for the series expansion
        var sum = 1; // Initial term of the series
        var term = sum; // Current term of the series
        var n = 1; // Index of the series

        while (Math.abs(term / sum) > eps) {
            n += 1;
            term = (a / n) * (x / (n + 1)) * term;
            sum += term;
        }

        var lnSum = Math.log(sum);
        var lnGammaA = (a - 1) * ((Math.log(a) - Math.log(Math.sqrt(2 * Math.PI)) + a) + 1 / (12 * a) - 1 / (360 * Math.pow(a, 3)));
        var rightTailProb = Math.exp(a * Math.log(x) - x - lnSum + lnGammaA);

        // Convert the number to a string with 16 digits after the decimal point
        var rightTailProbStr = rightTailProb.toFixed(16);
        element2.innerHTML = rightTailProbStr;
    }






    function setA(symbol) {
        var element1 = document.getElementById(symbol + "phi");
        var element2 = document.getElementById(symbol + "dev");
        var element = document.getElementById(symbol + "a");
        var element3 = document.getElementById(symbol + "a2");
        element.innerHTML = (element1.innerHTML - Math.sqrt(3) * element2.innerHTML);
        element3.innerHTML = (element1.innerHTML - Math.sqrt(3) * element2.innerHTML);
    }

    function setB(symbol) {
        var element1 = parseFloat(document.getElementById(symbol + "phi").innerHTML);
        var element2 = parseFloat(document.getElementById(symbol + "dev").innerHTML);
        var element = document.getElementById(symbol + "b");
        var element3 = document.getElementById(symbol + "b2");
        element.innerHTML = (element1 + Math.sqrt(3) * element2);
        element3.innerHTML = (element1 + Math.sqrt(3) * element2);
    }

    function calculateXi2prA(symbol) {
        var AJ3 = document.getElementById(symbol + "E1a").innerHTML;
        var AK3 = document.getElementById(symbol + "E2a").innerHTML;
        var AL3 = document.getElementById(symbol + "E3a").innerHTML;
        var AM3 = document.getElementById(symbol + "E4a").innerHTML;

        var AF3 = document.getElementById(symbol + "O1a").innerHTML;
        var AG3 = document.getElementById(symbol + "O2a").innerHTML;
        var AH3 = document.getElementById(symbol + "O3a").innerHTML;
        var AI3 = document.getElementById(symbol + "O4a").innerHTML;

        // Convert all the values to numbers
        AJ3 = parseFloat(AJ3);
        AK3 = parseFloat(AK3);
        AL3 = parseFloat(AL3);
        AM3 = parseFloat(AM3);
        AF3 = parseFloat(AF3);
        AG3 = parseFloat(AG3);
        AH3 = parseFloat(AH3);
        AI3 = parseFloat(AI3);

        // Perform the calculation
        var xi2pr = Math.pow(AF3 - AJ3, 2) / AJ3 + Math.pow(AG3 - AK3, 2) / AK3 +
            Math.pow(AH3 - AL3, 2) / AL3 + Math.pow(AI3 - AM3, 2) / AM3;

        // Do something with the result (e.g. display it in an element with the ID "symbolXi2pr")
        var elementXi2pr = document.getElementById(symbol + "Xi2prA");
        elementXi2pr.innerHTML = xi2pr.toFixed(2);
    }

    function checkType(symbol) {
        if (document.getElementById(symbol + "var1").innerHTML > document.getElementById(symbol + "var2").innerHTML) {
            document.getElementById(symbol + "type").innerHTML = "Нормальный";
        } else {
            document.getElementById(symbol + "type").innerHTML = "Равномерный";
        }
    }

    function setZ(symbol) {
        document.getElementById(symbol + "z").innerHTML = Math.sqrt(-2 * Math.log(Math.random())) * Math.cos(2 * Math.PI * Math.random());
    }

    function createChart(rows) {
        const ctx = document.getElementById('myChart').getContext('2d');

        // Создание нового объекта диаграммы с помощью Chart.js
        new Chart(ctx, {
            type: 'bar', // Тип диаграммы (столбчатая)
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7'], // Надписи для осей X
                datasets: [{
                    label: 'Внешне-внутренние радиусы', // Надпись для диаграммы
                    data: rows, // Значения для осей Y (значения rowMaxes, умноженные на 2)
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function setDistances(symbol) {
        var type = document.getElementById(symbol + "type").innerHTML;
        switch (symbol) {
            case 'i':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r1c3').innerHTML = distance;
                    document.getElementById('r3c1').innerHTML = distance;
                    document.getElementById('d1c3').innerHTML = distance;
                    document.getElementById('d3c1').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r1c3').innerHTML = distance;
                    document.getElementById('r3c1').innerHTML = distance;
                    document.getElementById('d1c3').innerHTML = distance;
                    document.getElementById('d3c1').innerHTML = distance;
                }
                break;
            case 'l':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r1c4').innerHTML = distance;
                    document.getElementById('r4c1').innerHTML = distance;
                    document.getElementById('d1c4').innerHTML = distance;
                    document.getElementById('d4c1').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r1c4').innerHTML = distance;
                    document.getElementById('r4c1').innerHTML = distance;
                    document.getElementById('d1c4').innerHTML = distance;
                    document.getElementById('d4c1').innerHTML = distance;
                }
                break;
            case 'd':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r4c3').innerHTML = distance;
                    document.getElementById('r3c4').innerHTML = distance;
                    document.getElementById('d3c4').innerHTML = distance;
                    document.getElementById('d4c3').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r4c3').innerHTML = distance;
                    document.getElementById('r3c4').innerHTML = distance;
                    document.getElementById('d3c4').innerHTML = distance;
                    document.getElementById('d4c3').innerHTML = distance;
                }
                break;
            case 'u':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r2c3').innerHTML = distance;
                    document.getElementById('r3c2').innerHTML = distance;
                    document.getElementById('d2c3').innerHTML = distance;
                    document.getElementById('d3c2').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r2c3').innerHTML = distance;
                    document.getElementById('r3c2').innerHTML = distance;
                    document.getElementById('d2c3').innerHTML = distance;
                    document.getElementById('d3c2').innerHTML = distance;
                }
                break;
            case 'p':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r3c5').innerHTML = distance;
                    document.getElementById('r5c3').innerHTML = distance;
                    document.getElementById('d3c5').innerHTML = distance;
                    document.getElementById('d5c3').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r3c5').innerHTML = distance;
                    document.getElementById('r5c3').innerHTML = distance;
                    document.getElementById('d3c5').innerHTML = distance;
                    document.getElementById('d5c3').innerHTML = distance;
                }
                break;
            case 'h':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r5c6').innerHTML = distance;
                    document.getElementById('r6c5').innerHTML = distance;
                    document.getElementById('d5c6').innerHTML = distance;
                    document.getElementById('d6c5').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r5c6').innerHTML = distance;
                    document.getElementById('r6c5').innerHTML = distance;
                    document.getElementById('d5c6').innerHTML = distance;
                    document.getElementById('d6c5').innerHTML = distance;
                }
                break;
            case 'j':
                if (type == "Нормальный") {
                    var num1 = parseFloat(document.getElementById(symbol + "phi3").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "dev3").innerHTML);
                    var num3 = parseFloat(document.getElementById(symbol + "z").innerHTML);
                    var distance = num1 + num2 * num3;
                    document.getElementById('r6c7').innerHTML = distance;
                    document.getElementById('r7c6').innerHTML = distance;
                    document.getElementById('d6c7').innerHTML = distance;
                    document.getElementById('d7c6').innerHTML = distance;
                } else {
                    var num1 = parseFloat(document.getElementById(symbol + "a2").innerHTML);
                    var num2 = parseFloat(document.getElementById(symbol + "b2").innerHTML);
                    var distance = num1 + (num2 - num1) * Math.random();
                    document.getElementById('r6c7').innerHTML = distance;
                    document.getElementById('r7c6').innerHTML = distance;
                    document.getElementById('d6c7').innerHTML = distance;
                    document.getElementById('d7c6').innerHTML = distance;
                }
                break;
        }
    }




    function dijkstr() {

        var r1c3 = document.getElementById("r3c5").innerHTML;
        var r3c2 = document.getElementById("r5c6").innerHTML;
        //--
        var newValue = parseFloat(r1c3) + parseFloat(r3c2);
        document.getElementById("d3c6").innerHTML = newValue;
        document.getElementById("d6c3").innerHTML = newValue;


        var r1c3 = document.getElementById("r4c3").innerHTML;
        var r3c2 = document.getElementById("r3c2").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2);

        document.getElementById("d4c2").innerHTML = newValue;
        document.getElementById("d2c4").innerHTML = newValue;
        //--
        var r1c3 = document.getElementById("r2c3").innerHTML;
        var r3c2 = document.getElementById("r3c1").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2);

        document.getElementById("d2c1").innerHTML = newValue;
        document.getElementById("d1c2").innerHTML = newValue;
        //-----
        var r1c3 = document.getElementById("r2c3").innerHTML;
        var r3c2 = document.getElementById("r3c5").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2);

        document.getElementById("d2c5").innerHTML = newValue;
        document.getElementById("d5c2").innerHTML = newValue;

        var r1c3 = document.getElementById("r2c3").innerHTML;
        var r3c2 = document.getElementById("r3c5").innerHTML;
        var d1c2 = document.getElementById("r5c6").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2) + parseFloat(d1c2);

        document.getElementById("d2c6").innerHTML = newValue;
        document.getElementById("d6c2").innerHTML = newValue;

        var r1c3 = document.getElementById("r2c3").innerHTML;
        var r3c2 = document.getElementById("r3c5").innerHTML;
        var d1c2 = document.getElementById("r5c6").innerHTML;
        var d1c6 = document.getElementById("r6c7").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2) + parseFloat(d1c2) + parseFloat(d1c6);

        document.getElementById("d2c7").innerHTML = newValue;
        document.getElementById("d7c2").innerHTML = newValue;

        var r1c3 = document.getElementById("r7c6").innerHTML;
        var r3c2 = document.getElementById("r6c5").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2);

        document.getElementById("d7c5").innerHTML = newValue;
        document.getElementById("d5c7").innerHTML = newValue;
        //----

        var r1c3 = document.getElementById("r4c3").innerHTML;
        var r3c2 = document.getElementById("r3c5").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2);

        document.getElementById("d4c5").innerHTML = newValue;
        document.getElementById("d5c4").innerHTML = newValue;

        var r1c3 = document.getElementById("r4c3").innerHTML;
        var r3c2 = document.getElementById("r3c5").innerHTML;
        var d1c2 = document.getElementById("r5c6").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2) + parseFloat(d1c2);

        document.getElementById("d4c6").innerHTML = newValue;
        document.getElementById("d6c4").innerHTML = newValue;

        var r1c3 = document.getElementById("r3c5").innerHTML;
        var r3c2 = document.getElementById("r5c6").innerHTML;
        var d1c2 = document.getElementById("r6c7").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2) + parseFloat(d1c2);

        document.getElementById("d3c7").innerHTML = newValue;
        document.getElementById("d7c3").innerHTML = newValue;

        var r1c3 = document.getElementById("r4c3").innerHTML;
        var r3c5 = document.getElementById("r3c5").innerHTML;
        var r5c6 = document.getElementById("r5c6").innerHTML;
        var d1c6 = document.getElementById("r6c7").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c5) + parseFloat(r5c6) + parseFloat(d1c6);

        document.getElementById("d4c7").innerHTML = newValue;
        document.getElementById("d7c4").innerHTML = newValue;

        var r1c3 = document.getElementById("r1c3").innerHTML;
        var r3c2 = document.getElementById("r3c2").innerHTML;
        var d1c2 = document.getElementById("d1c2").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c2) + parseFloat(d1c2);


        document.getElementById("d1c2").innerHTML = newValue;
        document.getElementById("d2c1").innerHTML = newValue;

        var r1c3 = document.getElementById("r1c3").innerHTML;
        var r3c5 = document.getElementById("r3c5").innerHTML;
        var d1c5 = document.getElementById("d1c5").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c5) + parseFloat(d1c5);

        document.getElementById("d1c5").innerHTML = newValue;
        document.getElementById("d5c1").innerHTML = newValue;

        var r1c3 = document.getElementById("r1c3").innerHTML;
        var r3c5 = document.getElementById("r3c5").innerHTML;
        var r5c6 = document.getElementById("r5c6").innerHTML;
        var d1c6 = document.getElementById("d1c6").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c5) + parseFloat(r5c6) + parseFloat(d1c6);

        document.getElementById("d1c6").innerHTML = newValue;
        document.getElementById("d6c1").innerHTML = newValue;

        var r1c3 = document.getElementById("r1c3").innerHTML;
        var r3c5 = document.getElementById("r3c5").innerHTML;
        var r5c6 = document.getElementById("r5c6").innerHTML;
        var r6c7 = document.getElementById("r6c7").innerHTML;
        var d1c7 = document.getElementById("d1c7").innerHTML;

        var newValue = parseFloat(r1c3) + parseFloat(r3c5) + parseFloat(r5c6) + parseFloat(r6c7) + parseFloat(d1c7);

        document.getElementById("d1c7").innerHTML = newValue;
        document.getElementById("d7c1").innerHTML = newValue;

    }

    // Функция для преобразования строки в число с плавающей запятой
    function parseFloatOrZero(str) {
        const num = parseFloat(str);
        return isNaN(num) ? 0 : num;
    }

    function setMax() {
        // Получение таблицы из HTML
        const table = document.getElementById('table1');
        const rows = table.rows;

        // Инициализация массивов для хранения максимальных значений рядов и столбцов
        const rowMaxes = [];
        const colMaxes = [];

        // Перебор всех ячеек в таблице
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            let rowMax = -Infinity;

            for (let j = 1; j < row.cells.length; j++) {
                const cell = row.cells[j];
                const num = parseFloatOrZero(cell.innerText);

                // Обновление максимального значения текущего ряда
                rowMax = Math.max(rowMax, num);

                // Обновление максимального значения текущего столбца
                if (colMaxes[j - 1] === undefined) {
                    colMaxes[j - 1] = num;
                } else {
                    colMaxes[j - 1] = Math.max(colMaxes[j - 1], num);
                }
            }

            // Добавление максимального значения текущего ряда в массив
            rowMaxes.push(rowMax);
        }

        // Получение блоков div для вывода результатов
        const rowResultsDiv = document.getElementById('row-results');
        const colResultsDiv = document.getElementById('col-results');
        const overallResultsDiv = document.getElementById('overall-results');

        // Вывод максимальных значений рядов и столбцов в соответствующие блоки div
        rowResultsDiv.innerText = 'Максимальные значения рядов: ' + rowMaxes.join(', ') + '\nВнешне-внутренние радиусы: ' + rowMaxes.map(x => x * 2).join(', ');
        colResultsDiv.innerText = 'Максимальные значения столбцов: ' + colMaxes.join(', ') + '\nВнешне-внутренние радиусы: ' + rowMaxes.map(x => x * 2).join(', ');
        // Вывод максимальных значений среди максимальных значений рядов и столбцов в соответствующие блоки div
        overallResultsDiv.innerText =
            'Внешний радиус: ' + Math.min(...rowMaxes) +
            '\nВнутренний радиус: ' + Math.min(...colMaxes) +
            '\nВнешне-внутренний радиус: ' + Math.min(...rowMaxes)*2;
        '\n Минимаксное значение: ' + Math.min(...rowMaxes.map(x => x * 2));
        createChart(rowMaxes.map(x => x * 2));
    }


    setTimeout(function() {
        var letters = ['i', 'l', 'd', 'u', 'p', 'h', 'j']; // array of letters

        // loop over the letters and call the functions
        for (var i = 0; i < letters.length; i++) {
            var letter = letters[i];

            setFi(letter);
            setStandardDeviation(letter);
            setDif(letter);
            setPlus(letter);
            setO1(letter);
            setO2(letter);
            setO3(letter);
            setO4(letter);
            calculateXi2pr(letter);
            chiSquareRightTail(letter, 1);
            setA(letter);
            setB(letter);
            setO1alt(letter);
            setO2alt(letter);
            setO3alt(letter);
            setO4alt(letter);
            calculateXi2prA(letter);
            chiSquareRightTail(letter, 2);
            checkType(letter);
            setZ(letter);
            setDistances(letter);
        }
        dijkstr();
        setMax();
    }, 30000);
</script>

<table>
    <tr>
        <td>Множество ребер</td>
        <td></td>
        <td>Экспериментальные данные</td>
        <td>Нормальный закон распределения</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Нормальный закон распределения</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Равномерный закон распределения</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>ВЫВОД</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>9:00</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>12:00</td>
        <td>13:00</td>
        <td>9:00</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>12:00</td>
        <td>13:00</td>
        <td>9:00</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>12:00</td>
        <td>13:00</td>
        <td>9:00</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>12:00</td>
        <td>13:00</td>
        <td>9:00</td>
        <td>10:00</td>
        <td>11:00</td>
        <td>12:00</td>
        <td>13:00</td>
        <td>μ</td>
        <td>σ</td>
        <td>μ-σ</td>
        <td>μ+σ</td>
        <td>О1</td>
        <td>О2</td>
        <td>О3</td>
        <td>О4</td>
        <td>Е1</td>
        <td>Е2</td>
        <td>Е3</td>
        <td>Е4</td>
        <td>X^2 приведенное</td>
        <td></td>
        <td></td>
        <td>Вероятность X^2&gt;=X^2 прив</td>
        <td>μ</td>
        <td>σ</td>
        <td>a</td>
        <td>b</td>
        <td>О1</td>
        <td>О2</td>
        <td>О3</td>
        <td>О4</td>
        <td>Е1</td>
        <td>Е2</td>
        <td>Е3</td>
        <td>Е4</td>
        <td>X^2 приведенное</td>
        <td></td>
        <td></td>
        <td>Вероятность X^2&gt;=X^2 прив</td>
        <td>ТИП ГСЧ</td>
        <td>μ</td>
        <td>σ</td>
        <td>z</td>
        <td>a</td>
        <td>b</td>
    </tr>
    <tr>
        <td>1.3</td>
        <td></td>
        <td id="i1"></td>
        <td id="i2"></td>
        <td id="i3"></td>
        <td id="i4"></td>
        <td id="i5"></td>
        <td id="i6"></td>
        <td id="i7"></td>
        <td id="i8"></td>
        <td id="i9"></td>
        <td id="i10"></td>
        <td id="i11"></td>
        <td id="i12"></td>
        <td id="i13"></td>
        <td id="i14"></td>
        <td id="i15"></td>
        <td id="i16"></td>
        <td id="i17"></td>
        <td id="i18"></td>
        <td id="i19"></td>
        <td id="i20"></td>
        <td id="i21"></td>
        <td id="i22"></td>
        <td id="i23"></td>
        <td id="i24"></td>
        <td id="i25"></td>
        <td id="iphi"></td>
        <td id="idev"></td>
        <td id="idif"></td>
        <td id="iplus"></td>
        <td id="iO1"></td>
        <td id="iO2"></td>
        <td id="iO3"></td>
        <td id="iO4"></td>
        <td id="iE1">4</td>
        <td id="iE2">8.5</td>
        <td id="iE3">8.5</td>
        <td id="iE4">4</td>
        <td id="iXi2pr"></td>
        <td></td>
        <td></td>
        <td id="ivar1"></td>
        <td id="iphi2"></td>
        <td id="idev2"></td>
        <td id="ia"></td>
        <td id="ib"></td>
        <td id="iO1a"></td>
        <td id="iO2a"></td>
        <td id="iO3a"></td>
        <td id="iO4a"></td>
        <td id="iE1a">0.25</td>
        <td id="iE2a">12.25</td>
        <td id="iE3a">12.25</td>
        <td id="iE4a">0.25</td>
        <td id="iXi2prA"></td>
        <td></td>
        <td></td>
        <td id="ivar2"></td>
        <td id="itype"></td>
        <td id="iphi3"></td>
        <td id="idev3"></td>
        <td id="iz"></td>
        <td id="ia2"></td>
        <td id="ib2"></td>
    </tr>
    <tr>
        <td>1.4</td>
        <td></td>
        <td id="l1"></td>
        <td id="l2"></td>
        <td id="l3"></td>
        <td id="l4"></td>
        <td id="l5"></td>
        <td id="l6"></td>
        <td id="l7"></td>
        <td id="l8"></td>
        <td id="l9"></td>
        <td id="l10"></td>
        <td id="l11"></td>
        <td id="l12"></td>
        <td id="l13"></td>
        <td id="l14"></td>
        <td id="l15"></td>
        <td id="l16"></td>
        <td id="l17"></td>
        <td id="l18"></td>
        <td id="l19"></td>
        <td id="l20"></td>
        <td id="l21"></td>
        <td id="l22"></td>
        <td id="l23"></td>
        <td id="l24"></td>
        <td id="l25"></td>
        <td id="lphi"></td>
        <td id="ldev"></td>
        <td id="ldif"></td>
        <td id="lplus"></td>
        <td id="lO1"></td>
        <td id="lO2"></td>
        <td id="lO3"></td>
        <td id="lO4"></td>
        <td id="lE1">4</td>
        <td id="lE2">8.5</td>
        <td id="lE3">8.5</td>
        <td id="lE4">4</td>
        <td id="lXi2pr"></td>
        <td></td>
        <td></td>
        <td id="lvar1"></td>
        <td id="lphi2"></td>
        <td id="ldev2"></td>
        <td id="la"></td>
        <td id="lb"></td>
        <td id="lO1a"></td>
        <td id="lO2a"></td>
        <td id="lO3a"></td>
        <td id="lO4a"></td>
        <td id="lE1a">0.25</td>
        <td id="lE2a">12.25</td>
        <td id="lE3a">12.25</td>
        <td id="lE4a">0.25</td>
        <td id="lXi2prA"></td>
        <td></td>
        <td></td>
        <td id="lvar2"></td>
        <td id="ltype"></td>
        <td id="lphi3"></td>
        <td id="ldev3"></td>
        <td id="lz"></td>
        <td id="la2"></td>
        <td id="lb2"></td>
    </tr>
    <tr>
        <td>4.3</td>
        <td></td>
        <td id="d1"></td>
        <td id="d2"></td>
        <td id="d3"></td>
        <td id="d4"></td>
        <td id="d5"></td>
        <td id="d6"></td>
        <td id="d7"></td>
        <td id="d8"></td>
        <td id="d9"></td>
        <td id="d10"></td>
        <td id="d11"></td>
        <td id="d12"></td>
        <td id="d13"></td>
        <td id="d14"></td>
        <td id="d15"></td>
        <td id="d16"></td>
        <td id="d17"></td>
        <td id="d18"></td>
        <td id="d19"></td>
        <td id="d20"></td>
        <td id="d21"></td>
        <td id="d22"></td>
        <td id="d23"></td>
        <td id="d24"></td>
        <td id="d25"></td>
        <td id="dphi"></td>
        <td id="ddev"></td>
        <td id="ddif"></td>
        <td id="dplus"></td>
        <td id="dO1"></td>
        <td id="dO2"></td>
        <td id="dO3"></td>
        <td id="dO4"></td>
        <td id="dE1">4</td>
        <td id="dE2">8.5</td>
        <td id="dE3">8.5</td>
        <td id="dE4">4</td>
        <td id="dXi2pr"></td>
        <td></td>
        <td></td>
        <td id="dvar1"></td>
        <td id="dphi2"></td>
        <td id="ddev2"></td>
        <td id="da"></td>
        <td id="db"></td>
        <td id="dO1a"></td>
        <td id="dO2a"></td>
        <td id="dO3a"></td>
        <td id="dO4a"></td>
        <td id="dE1a">0.25</td>
        <td id="dE2a">12.25</td>
        <td id="dE3a">12.25</td>
        <td id="dE4a">0.25</td>
        <td id="dXi2prA"></td>
        <td></td>
        <td></td>
        <td id="dvar2"></td>
        <td id="dtype"></td>
        <td id="dphi3"></td>
        <td id="ddev3"></td>
        <td id="dz"></td>
        <td id="da2"></td>
        <td id="db2"></td>
    </tr>
    <tr>
        <td>2.3</td>
        <td></td>
        <td id="u1"></td>
        <td id="u2"></td>
        <td id="u3"></td>
        <td id="u4"></td>
        <td id="u5"></td>
        <td id="u6"></td>
        <td id="u7"></td>
        <td id="u8"></td>
        <td id="u9"></td>
        <td id="u10"></td>
        <td id="u11"></td>
        <td id="u12"></td>
        <td id="u13"></td>
        <td id="u14"></td>
        <td id="u15"></td>
        <td id="u16"></td>
        <td id="u17"></td>
        <td id="u18"></td>
        <td id="u19"></td>
        <td id="u20"></td>
        <td id="u21"></td>
        <td id="u22"></td>
        <td id="u23"></td>
        <td id="u24"></td>
        <td id="u25"></td>
        <td id="uphi"></td>
        <td id="udev"></td>
        <td id="udif"></td>
        <td id="uplus"></td>
        <td id="uO1"></td>
        <td id="uO2"></td>
        <td id="uO3"></td>
        <td id="uO4"></td>
        <td id="uE1">4</td>
        <td id="uE2">8.5</td>
        <td id="uE3">8.5</td>
        <td id="uE4">4</td>
        <td id="uXi2pr"></td>
        <td></td>
        <td></td>
        <td id="uvar1"></td>
        <td id="uphi2"></td>
        <td id="udev2"></td>
        <td id="ua"></td>
        <td id="ub"></td>
        <td id="uO1a"></td>
        <td id="uO2a"></td>
        <td id="uO3a"></td>
        <td id="uO4a"></td>
        <td id="uE1a">0.25</td>
        <td id="uE2a">12.25</td>
        <td id="uE3a">12.25</td>
        <td id="uE4a">0.25</td>
        <td id="uXi2prA"></td>
        <td></td>
        <td></td>
        <td id="uvar2"></td>
        <td id="utype"></td>
        <td id="uphi3"></td>
        <td id="udev3"></td>
        <td id="uz"></td>
        <td id="ua2"></td>
        <td id="ub2"></td>
    </tr>
    <tr>
        <td>3.5</td>
        <td></td>
        <td id="p1"></td>
        <td id="p2"></td>
        <td id="p3"></td>
        <td id="p4"></td>
        <td id="p5"></td>
        <td id="p6"></td>
        <td id="p7"></td>
        <td id="p8"></td>
        <td id="p9"></td>
        <td id="p10"></td>
        <td id="p11"></td>
        <td id="p12"></td>
        <td id="p13"></td>
        <td id="p14"></td>
        <td id="p15"></td>
        <td id="p16"></td>
        <td id="p17"></td>
        <td id="p18"></td>
        <td id="p19"></td>
        <td id="p20"></td>
        <td id="p21"></td>
        <td id="p22"></td>
        <td id="p23"></td>
        <td id="p24"></td>
        <td id="p25"></td>
        <td id="pphi"></td>
        <td id="pdev"></td>
        <td id="pdif"></td>
        <td id="pplus"></td>
        <td id="pO1"></td>
        <td id="pO2"></td>
        <td id="pO3"></td>
        <td id="pO4"></td>
        <td id="pE1">4</td>
        <td id="pE2">8.5</td>
        <td id="pE3">8.5</td>
        <td id="pE4">4</td>
        <td id="pXi2pr"></td>
        <td></td>
        <td></td>
        <td id="pvar1"></td>
        <td id="pphi2"></td>
        <td id="pdev2"></td>
        <td id="pa"></td>
        <td id="pb"></td>
        <td id="pO1a"></td>
        <td id="pO2a"></td>
        <td id="pO3a"></td>
        <td id="pO4a"></td>
        <td id="pE1a">0.25</td>
        <td id="pE2a">12.25</td>
        <td id="pE3a">12.25</td>
        <td id="pE4a">0.25</td>
        <td id="pXi2prA"></td>
        <td></td>
        <td></td>
        <td id="pvar2"></td>
        <td id="ptype"></td>
        <td id="pphi3"></td>
        <td id="pdev3"></td>
        <td id="pz"></td>
        <td id="pa2"></td>
        <td id="pb2"></td>
    </tr>
    <tr>
        <td>5.6</td>
        <td></td>
        <td id="h1"></td>
        <td id="h2"></td>
        <td id="h3"></td>
        <td id="h4"></td>
        <td id="h5"></td>
        <td id="h6"></td>
        <td id="h7"></td>
        <td id="h8"></td>
        <td id="h9"></td>
        <td id="h10"></td>
        <td id="h11"></td>
        <td id="h12"></td>
        <td id="h13"></td>
        <td id="h14"></td>
        <td id="h15"></td>
        <td id="h16"></td>
        <td id="h17"></td>
        <td id="h18"></td>
        <td id="h19"></td>
        <td id="h20"></td>
        <td id="h21"></td>
        <td id="h22"></td>
        <td id="h23"></td>
        <td id="h24"></td>
        <td id="h25"></td>
        <td id="hphi"></td>
        <td id="hdev"></td>
        <td id="hdif"></td>
        <td id="hplus"></td>
        <td id="hO1"></td>
        <td id="hO2"></td>
        <td id="hO3"></td>
        <td id="hO4"></td>
        <td id="hE1">4</td>
        <td id="hE2">8.5</td>
        <td id="hE3">8.5</td>
        <td id="hE4">4</td>
        <td id="hXi2pr"></td>
        <td></td>
        <td></td>
        <td id="hvar1"></td>
        <td id="hphi2"></td>
        <td id="hdev2"></td>
        <td id="ha"></td>
        <td id="hb"></td>
        <td id="hO1a"></td>
        <td id="hO2a"></td>
        <td id="hO3a"></td>
        <td id="hO4a"></td>
        <td id="hE1a">0.25</td>
        <td id="hE2a">12.25</td>
        <td id="hE3a">12.25</td>
        <td id="hE4a">0.25</td>
        <td id="hXi2prA"></td>
        <td></td>
        <td></td>
        <td id="hvar2"></td>
        <td id="htype"></td>
        <td id="hphi3"></td>
        <td id="hdev3"></td>
        <td id="hz"></td>
        <td id="ha2"></td>
        <td id="hb2"></td>
    </tr>
    <tr>
        <td>6.7</td>
        <td></td>
        <td id="j1"></td>
        <td id="j2"></td>
        <td id="j3"></td>
        <td id="j4"></td>
        <td id="j5"></td>
        <td id="j6"></td>
        <td id="j7"></td>
        <td id="j8"></td>
        <td id="j9"></td>
        <td id="j10"></td>
        <td id="j11"></td>
        <td id="j12"></td>
        <td id="j13"></td>
        <td id="j14"></td>
        <td id="j15"></td>
        <td id="j16"></td>
        <td id="j17"></td>
        <td id="j18"></td>
        <td id="j19"></td>
        <td id="j20"></td>
        <td id="j21"></td>
        <td id="j22"></td>
        <td id="j23"></td>
        <td id="j24"></td>
        <td id="j25"></td>
        <td id="jphi"></td>
        <td id="jdev"></td>
        <td id="jdif"></td>
        <td id="jplus"></td>
        <td id="jO1"></td>
        <td id="jO2"></td>
        <td id="jO3"></td>
        <td id="jO4"></td>
        <td id="jE1">4</td>
        <td id="jE2">8.5</td>
        <td id="jE3">8.5</td>
        <td id="jE4">4</td>
        <td id="jXi2pr"></td>
        <td></td>
        <td></td>
        <td id="jvar1"></td>
        <td id="jphi2"></td>
        <td id="jdev2"></td>
        <td id="ja"></td>
        <td id="jb"></td>
        <td id="jO1a"></td>
        <td id="jO2a"></td>
        <td id="jO3a"></td>
        <td id="jO4a"></td>
        <td id="jE1a">0.25</td>
        <td id="jE2a">12.25</td>
        <td id="jE3a">12.25</td>
        <td id="jE4a">0.25</td>
        <td id="jXi2prA"></td>
        <td></td>
        <td></td>
        <td id="jvar2"></td>
        <td id="jtype"></td>
        <td id="jphi3"></td>
        <td id="jdev3"></td>
        <td id="jz"></td>
        <td id="ja2"></td>
        <td id="jb2"></td>
    </tr>
</table>
<h1>Матрица расстояний</h1>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
<table>
    <tr>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
    </tr>
    <tr>
        <th>1</th>
        <td id="r1c1">0</td>
        <td id="r1c2">0</td>
        <td id="r1c3">0</td>
        <td id="r1c4">0</td>
        <td id="r1c5">0</td>
        <td id="r1c6">0</td>
        <td id="r1c7">0</td>
    </tr>
    <tr>
        <th>2</th>
        <td id="r2c1">0</td>
        <td id="r2c2">0</td>
        <td id="r2c3">0</td>
        <td id="r2c4">0</td>
        <td id="r2c5">0</td>
        <td id="r2c6">0</td>
        <td id="r2c7">0</td>
    </tr>
    <tr>
        <th>3</th>
        <td id="r3c1">0</td>
        <td id="r3c2">0</td>
        <td id="r3c3">0</td>
        <td id="r3c4">0</td>
        <td id="r3c5">0</td>
        <td id="r3c6">0</td>
        <td id="r3c7">0</td>
    </tr>
    <tr>
        <th>4</th>
        <td id="r4c1">0</td>
        <td id="r4c2">0</td>
        <td id="r4c3">0</td>
        <td id="r4c4">0</td>
        <td id="r4c5">0</td>
        <td id="r4c6">0</td>
        <td id="r4c7">0</td>
    </tr>
    <tr>
        <th>5</th>
        <td id="r5c1">0</td>
        <td id="r5c2">0</td>
        <td id="r5c3">0</td>
        <td id="r5c4">0</td>
        <td id="r5c5">0</td>
        <td id="r5c6">0</td>
        <td id="r5c7">0</td>
    </tr>
    <tr>
        <th>6</th>
        <td id="r6c1">0</td>
        <td id="r6c2">0</td>
        <td id="r6c3">0</td>
        <td id="r6c4">0</td>
        <td id="r6c5">0</td>
        <td id="r6c6">0</td>
        <td id="r6c7">0</td>
    </tr>
    <tr>
        <th>7</th>
        <td id="r7c1">0</td>
        <td id="r7c2">0</td>
        <td id="r7c3">0</td>
        <td id="r7c4">0</td>
        <td id="r7c5">0</td>
        <td id="r7c6">0</td>
        <td id="r7c7">0</td>
    </tr>
</table>

<h1>Случайная сеть</h1>
<table id="table1">
    <tr>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
    </tr>
    <tr>
        <th>1</th>
        <td id="d1c1">0</td>
        <td id="d1c2">0</td>
        <td id="d1c3">0</td>
        <td id="d1c4">0</td>
        <td id="d1c5">0</td>
        <td id="d1c6">0</td>
        <td id="d1c7">0</td>
    </tr>
    <tr>
        <th>2</th>
        <td id="d2c1">0</td>
        <td id="d2c2">0</td>
        <td id="d2c3">0</td>
        <td id="d2c4">0</td>
        <td id="d2c5">0</td>
        <td id="d2c6">0</td>
        <td id="d2c7">0</td>
    </tr>
    <tr>
        <th>3</th>
        <td id="d3c1">0</td>
        <td id="d3c2">0</td>
        <td id="d3c3">0</td>
        <td id="d3c4">0</td>
        <td id="d3c5">0</td>
        <td id="d3c6">0</td>
        <td id="d3c7">0</td>
    </tr>
    <tr>
        <th>4</th>
        <td id="d4c1">0</td>
        <td id="d4c2">0</td>
        <td id="d4c3">0</td>
        <td id="d4c4">0</td>
        <td id="d4c5">0</td>
        <td id="d4c6">0</td>
        <td id="d4c7">0</td>
    </tr>
    <tr>
        <th>5</th>
        <td id="d5c1">0</td>
        <td id="d5c2">0</td>
        <td id="d5c3">0</td>
        <td id="d5c4">0</td>
        <td id="d5c5">0</td>
        <td id="d5c6">0</td>
        <td id="d5c7">0</td>
    </tr>
    <tr>
        <th>6</th>
        <td id="d6c1">0</td>
        <td id="d6c2">0</td>
        <td id="d6c3">0</td>
        <td id="d6c4">0</td>
        <td id="d6c5">0</td>
        <td id="d6c6">0</td>
        <td id="d6c7">0</td>
    </tr>
    <tr>
        <th>7</th>
        <td id="d7c1">0</td>
        <td id="d7c2">0</td>
        <td id="d7c3">0</td>
        <td id="d7c4">0</td>
        <td id="d7c5">0</td>
        <td id="d7c6">0</td>
        <td id="d7c7">0</td>
    </tr>
</table>
<div id="row-results"></div>
<div id="col-results"></div>
<div id="overall-results"></div>
<img src="{{ asset('storage/get.png') }}" alt="Get">
<canvas id="myChart"></canvas>
