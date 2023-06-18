let startDate = document.getElementById("start_date");
let endDate = document.getElementById("end_date");
let duration = document.getElementById("duration");
let dateError = document.getElementById("date-error");
let package = document.getElementById("package_name");
let price = document.getElementById("price");
let btn = document.getElementById("btn");

function calculate() {
    var start = new Date(startDate.value);
    var end = new Date(endDate.value);

    var diffYears = end.getFullYear() - start.getFullYear();
    var diffMonths = end.getMonth() - start.getMonth();

    var totalMonths = diffYears * 12 + diffMonths;

    if (totalMonths > 0) {
        duration.value = totalMonths;
        dateError.innerHTML = "";
        switch (package.value) {
            case "GOLD":
                price.value = 30 * totalMonths;
                break;
            case "SILVER":
                price.value = 25 * totalMonths;
                break;
            case "PLATINUM":
                price.value = price * totalMonths;
                break;
            default:
                break;
        }
    } else {
        dateError.innerHTML = "Please Enter Valid Date";
        dateError.style.color = "red";
        duration.value = "";
    }
}
endDate.addEventListener("input", calculate);
package.addEventListener("change", function () {
    console.log(package.value);
});
