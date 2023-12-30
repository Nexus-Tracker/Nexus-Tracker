// Display Total amount = service price + delivery price
const totprice = document.getElementById('totprice');
const serviceprice = document.getElementById('serviceprice');
const deliveryprice = document.getElementById('deliveryprice');

console.log(totprice);
console.log(serviceprice.value);
console.log(deliveryprice.value);

calTotal();

serviceprice.addEventListener('input', calTotal);
deliveryprice.addEventListener('change', calTotal);


function calTotal() {
  if(serviceprice.value == ''){
    totprice.innerText = "  N " + deliveryprice.value;
  }
  else{
    totprice.innerText = "  N " + (parseInt(serviceprice.value) + parseInt(deliveryprice.value));
  } 
}


// will be in the edit.js//
// Retrieve data based on your chosen method:
// const urlParams = new URLSearchParams(window.location.search); // Example for URL parameters
// OR
// const dataToEdit = JSON.parse(localStorage.getItem("dataToEdit")); // Example for local storage

// Access input elements:
// const packageIdInput = document.querySelector('input[name="package-id"]');
// const trackingNoInput = document.querySelector('input[name="tracking-no"]');
// ... (select all other inputs using their names)

// Prefill values:
// packageIdInput.value = dataToEdit.packageId;
// trackingNoInput.value = dataToEdit.trackingNo;
// ... (set values for all other inputs using dataToEdit properties)
