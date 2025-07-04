
  1. Length Converter
  function convertLength() {
    const inputValue = parseFloat(document.getElementById('inputValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;

    const conversionRates = {
      meter: 1,
      kilometer: 1000,
      centimeter: 0.01,
      millimeter: 0.001,
      inch: 0.0254,
      foot: 0.3048,
      yard: 0.9144,
      mile: 1609.34,
    };

    if (isNaN(inputValue)) {
      document.getElementById('result').innerText = "Please enter a valid number.";
      return;
    }

    const valueInMeters = inputValue * conversionRates[fromUnit];
    const result = valueInMeters / conversionRates[toUnit];

    document.getElementById('result').innerText = `${inputValue} ${fromUnit} = ${result.toFixed(4)} ${toUnit}`;
  }


  function calculateBMI() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);

    if (isNaN(weight) || isNaN(height) || height <= 0) {
      document.getElementById('result').innerText = "Please enter valid weight and height.";
      return;
    }

    const bmi = weight / ((height / 100) ** 2);
    let category = "";

    if (bmi < 18.5) category = "Underweight";
    else if (bmi < 24.9) category = "Normal";
    else if (bmi < 29.9) category = "Overweight";
    else category = "Obese";

    document.getElementById('result').innerText = `Your BMI is ${bmi.toFixed(2)} (${category})`;
  }

  // 3. BMR Calculator
  function calculateBMR() {
    const gender = document.getElementById('gender').value;
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);

    if (!gender || isNaN(weight) || isNaN(height) || isNaN(age)) {
      document.getElementById('result').innerText = "Please fill all fields.";
      return;
    }

    let bmr = 0;
    if (gender === 'male') {
      bmr = 10 * weight + 6.25 * height - 5 * age + 5;
    } else {
      bmr = 10 * weight + 6.25 * height - 5 * age - 161;
    }

    document.getElementById('result').innerText = `Your BMR is ${bmr.toFixed(2)} calories/day`;
  }

  // 4. Water Intake Calculator
  function calculateWaterIntake() {
    const weight = parseFloat(document.getElementById('weight').value);

    if (isNaN(weight) || weight <= 0) {
      document.getElementById('result').innerText = "Please enter a valid weight.";
      return;
    }

    const ounces = weight * 0.67;
    const liters = ounces * 0.0295735;

    document.getElementById('result').innerText = `You should drink about ${liters.toFixed(2)} liters of water daily.`;
  }

  // 5. Heart Rate Calculator
  function calculateHeartRate() {
    const age = parseInt(document.getElementById('age').value);

    if (isNaN(age) || age <= 0) {
      document.getElementById('result').innerText = "Please enter a valid age.";
      return;
    }

    const maxHeartRate = 220 - age;
    const targetMin = maxHeartRate * 0.5;
    const targetMax = maxHeartRate * 0.85;

    document.getElementById('result').innerText =
      `Your target heart rate zone is ${Math.round(targetMin)} - ${Math.round(targetMax)} bpm.`;
  }

  // 6. Square Feet to Cubic Yards Calculator
  function convertSquareFeetToCubicYards() {
    const squareFeet = parseFloat(document.getElementById('squareFeet').value);
    const depth = parseFloat(document.getElementById('depth').value);

    if (isNaN(squareFeet) || isNaN(depth) || squareFeet <= 0 || depth <= 0) {
      document.getElementById('result').innerText = "Please enter valid values.";
      return;
    }

    const cubicFeet = squareFeet * (depth / 12); // Convert inches to feet
    const cubicYards = cubicFeet / 27;

    document.getElementById('result').innerText = `${cubicYards.toFixed(2)} cubic yards required.`;
  }

