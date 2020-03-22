const units = {
  Points: " Points"
};


const config = {
  minPoints: 0,
  maxPoints: 1250,
  unit: "Points" };


// Change min and max values

const tempValueInputs = document.querySelectorAll("input[type='text']");

tempValueInputs.forEach(input => {
  input.addEventListener("change", event => {
    const newValue = event.target.value;

    if (isNaN(newValue)) {
      return input.value = config[input.id];
    } else {
      config[input.id] = input.value;
      range[input.id.slice(0, 3)] = config[input.id]; // Update range
      return setPoints(); // Update points
    }
  });
});

// Change temperature

const range = document.querySelector("input[type='range']");
const points = document.getElementById("points");

function setPoints() {
    points.style.height = (range.value - config.minPoints) / (config.maxPoints - config.minPoints) * 100 + "%";
    points.dataset.value = range.value + units[config.unit];
}

range.addEventListener("input", setPoints);
setTimeout(setPoints, 1000);