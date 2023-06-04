function biggestId() {
    var inputElements = document.querySelectorAll('#users input');
    if (inputElements.length === 0) {
        var input = document.getElementById("biggestid");
        input.value = 0;
        return;
    }

    var valuesArray = [];
    for (var i = 0; i < inputElements.length; i++) {
        valuesArray.push(inputElements[i].value);
    }

    var maxValue = Math.max.apply(null, valuesArray);
    var input = document.getElementById("biggestid");
    input.value = maxValue;
}